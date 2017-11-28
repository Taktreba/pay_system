<h2>Стоимость нашего обслуживания за день : $<span class="coast"></span></h2>
<div id="pay_out"></div>

<table class="payment_system" style="text-align: center">
    <tr>
        <td onclick="showElement('menu1')" id="td1"><img src="img/logo-mastercard.png" width="30%"></td>
        <td onclick="showElement('menu2')" id="td2"><img src="img/logo-qiwi-koshelek.png" width="50%"></td>
        <td onclick="showElement('menu3')" id="td3"><img src="img/logo-quickpay.png" width="50%"></td>
        <td onclick="showElement('menu4')" id="td4"><img src="img/logo-visa.png" width="50%"></td>
        <td onclick="showElement('menu5')" id="td5"><img src="img/logo-yandex-money.png" width="50%"></td>
    </tr>
</table>

<div id="menu1" style="display: none">
    <hr>
    MasterCard взымает коммисию <strong>5%</strong> за операцию<br>
    Оперция длится <strong>20</strong> дней
</div>
<div id="menu2" style="display: none">
    <hr>
    QIWI взымает коммисию 7% за операцию<br>
    Оперция длится <strong>15</strong> дней
</div>
<div id="menu3" style="display: none">
    <hr>
    Quickpay взымает коммисию 10% за операцию<br>
    Оперция длится <strong>10</strong> дней
</div>
<div id="menu4" style="display: none">
    <hr>
    VISA взымает коммисию 15% за операцию<br>
    Оперция длится <strong>5</strong> дней
</div>
<div id="menu5" style="display: none">
    <hr>
    Яндекс взымает коммисию 20% за операцию<br>
    Оперция длиться <strong>1</strong> день
</div>
<hr>
<div> <!-- инпут для цифры перемножение на дату-->
    <form>
        <label>Оформить подписку на: <input type="number" id="values" min="1" max="6" value="1" >
            <select id="MCSelect">
                <option value="1">Дни</option>
                <option value="7">Недели</option>
                <option value="30">Месяц</option>
            </select></label><br><br>
        <input type="button" name="calculate" value="Рассчитать стоимость" onclick="calc()">
    </form>
</div>

<!-- модальное окно-->
<div id="win" style="display: none">
    <div class="overlay"></div>
    <div class="visible">
        <button type="button" onClick="getElementById('win').style.display='none';">X</button>
        <h2>Заголовок модалки</h2>
        <div class="content">
            <!--            Способ оплаты: <div id="lastType"></div><br>-->
            Срок:
            <div id="lastTime"></div>
            <br>
            Стоимость:
            <div id="lastValue"></div>
            <br>
        </div>
        Для того что бы оплатить, сначала <a href="index.php?id=sing_in">зарегестрируйтесь </a>
    </div>
</div>
<!-- end -->

<script>

    var rate;
    var coast = 1;

    function showElement(menu_id) {
        document.getElementById("menu1").style.display = 'none';
        document.getElementById("menu2").style.display = 'none';
        document.getElementById("menu3").style.display = 'none';
        document.getElementById("menu4").style.display = 'none';
        document.getElementById("menu5").style.display = 'none';
        document.getElementById(menu_id).style.display = 'block';

        switch (menu_id) {
            case 'menu1':
                rate = 5;
                break;
            case 'menu2':
                rate = 7;
                break;
            case 'menu3':
                rate = 10;
                break;
            case 'menu4':
                rate = 15;
                break;
            case 'menu5':
                rate = 20;
                break;
        }
    }

    function calc() {
        if (typeof rate === "undefined") {
            document.getElementById('pay_out').innerHTML = 'Выберите платежную систему пожалуйста';
        } else {

            var date;

            if(document.querySelector('#MCSelect').value === 1){
                date = 'дней'
            }else if(document.querySelector('#MCSelect').value === 7){
                date = 'недель'
            }else {
                date = 'месяцев'
            }
            document.getElementById('pay_out').innerHTML = '';
            document.getElementById('win').removeAttribute('style');
//            document.getElementById('lastType').innerHTML = '1';
            document.getElementById('lastTime').innerHTML = document.getElementById('values').value + ' ' + date;
            document.getElementById('lastValue').innerHTML = countValue() + ' $';

            console.log(countValue());
        }
    }

    function countValue() {


        var val = document.getElementById('values').value *  document.querySelector('#MCSelect').value;


        return val * coast * rate / 100 + val * coast;
    }


    window.onload = function() {
        document.getElementsByClassName('coast').innerHTML = coast;
    };


</script>