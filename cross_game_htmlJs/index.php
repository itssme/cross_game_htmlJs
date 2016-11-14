<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cross the line!</title>
        <script>
            // define all vars here
            var counter = 0;
            var courrent_counter_money = 0;
            var miner_counter = 0;
            var multip = 1;
            var array_btc = Array(70);

        </script>
    </head>
    <body>

        <script type="text/javascript" src="js/functions.js"></script>

        <br>

    <center>

        <div id="all">

            <fieldset id="main_fieldset" class="field_set">
                <legend>> <code>cross!</code> <</legend> 
                <span id="line" onmouseover="over_line()"><hr style="height: 25px; background-color: #000000; border-radius: 25px;"></span>

            </fieldset>

            <br>

            <fieldset class="field_set" style="width: 250px; position: relative; left: -190px;">
                <legend>Your Stats</legend>
                <code>Cross counter <span id="user_counter">0</span></code> <br>
                <code>Courrent money <span id="user_money">0</span></code>



            </fieldset>

            <fieldset class="field_set" style="width: 250px; position: relative; left: 190px; top: -72px;">
                <legend>Miner Stats</legend>
                <code>Global miner counter <span id="miner_counter">0</span></code> <br>
                <code>Miners <span id="miner_anz">0</span></code> <br>
                <code>Money per Sec. <span id="money_turn">0</span></code>


            </fieldset>



            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <div id="chart_div" style="width: 900px; height: 200px;"></div>

            <script>
            google.charts.load('current', {packages: ['corechart', 'line']});
            google.charts.setOnLoadCallback(drawBasic);


            setInterval(drawBasic, 2000);
            function drawBasic() {


                for (var i = 0; i <= 69; i++) {
                    array_btc[i] = array_btc[i + 1];
                }


                array_btc[69] = courrent_counter_money;


                var data = new google.visualization.DataTable();
                data.addColumn('number', 'X');
                data.addColumn('number', 'Money');


                data.addRows([
                    [0, array_btc[0]], [1, array_btc[1]], [2, array_btc[2]], [3, array_btc[3]], [4, array_btc[4]], [5, array_btc[5]],
                    [6, array_btc[6]], [7, array_btc[7]], [8, array_btc[8]], [9, array_btc[9]], [10, array_btc[10]], [11, array_btc[11]],
                    [12, array_btc[12]], [13, array_btc[13]], [14, array_btc[14]], [15, array_btc[15]], [16, array_btc[16]], [17, array_btc[17]],
                    [18, array_btc[18]], [19, array_btc[19]], [20, array_btc[20]], [21, array_btc[21]], [22, array_btc[22]], [23, array_btc[23]],
                    [24, array_btc[24]], [25, array_btc[25]], [26, array_btc[26]], [27, array_btc[27]], [28, array_btc[28]], [29, array_btc[29]],
                    [30, array_btc[30]], [31, array_btc[31]], [32, array_btc[32]], [33, array_btc[33]], [34, array_btc[34]], [35, array_btc[35]],
                    [36, array_btc[36]], [37, array_btc[37]], [38, array_btc[38]], [39, array_btc[39]], [40, array_btc[40]], [41, array_btc[41]],
                    [42, array_btc[42]], [43, array_btc[43]], [44, array_btc[44]], [45, array_btc[45]], [46, array_btc[46]], [47, array_btc[47]],
                    [48, array_btc[48]], [49, array_btc[49]], [50, array_btc[50]], [51, array_btc[51]], [52, array_btc[52]], [53, array_btc[53]],
                    [54, array_btc[54]], [55, array_btc[55]], [56, array_btc[56]], [57, array_btc[57]], [58, array_btc[58]], [59, array_btc[59]],
                    [60, array_btc[60]], [61, array_btc[61]], [62, array_btc[62]], [63, array_btc[63]], [64, array_btc[64]], [65, array_btc[65]],
                    [66, array_btc[66]], [67, array_btc[67]], [68, array_btc[68]], [69, array_btc[69]]
                ]);

                var options = {
                    hAxis: {
                        title: 'Time'
                    },
                    vAxis: {
                        title: ''
                    }
                };

                var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

                chart.draw(data, options);

            }
            </script>


            <br>
            <br>
            <br>

            <fieldset class="field_set" style="height: 1000px; width: 825px; position: relative;">
                <legend>Buy stuff!</legend>

                <fieldset class="field_set" style="width: 250px; left: 2px; position: absolute;">
                    <legend><code>Miners</code></legend>

                    <span id="miner_0">
                        <code>Cost 10  Cross 0.05</code> <br>
                        <button onclick="add(0, false)" class="myButton" style="width: 200px; height: 25px;"><code>Cross bot</code></button>
                    </span>

                    <hr>

                    <span id="miner_1">
                        <code>Cost 50  Cross 0.25</code> <br>
                        <button onclick="add(1, false)" class="myButton" style="width: 200px; height: 25px;"><code>Crossomat</code></button>
                    </span>

                    <hr>

                    <span id="miner_2">
                        <code>Cost 100  Cross 1</code> <br>
                        <button onclick="add(2, false)" class="myButton" style="width: 200px; height: 25px;"><code>Crossomat 2.0</code></button>
                    </span>

                    <hr>

                    <span id="miner_3">
                        <code>Cost 400  Cross 5</code> <br>
                        <button onclick="add(3, false)" class="myButton" style="width: 200px; height: 25px;"><code>Crossing pro</code></button>
                    </span>

                    <hr>

                    <span id="miner_4">
                        <code>Cost 2500  Cross 25</code> <br>
                        <button onclick="add(4, false)" class="myButton" style="width: 200px; height: 25px;"><code>Crossing ultra</code></button>
                    </span>

                    <hr>

                    <span id="miner_5">
                        <code>Cost 10000  Cross 100</code> <br>
                        <button onclick="add(5, false)" class="myButton" style="width: 200px; height: 25px;"><code>Crossing mega</code></button>
                    </span>
                    
                    <hr>
                    
                    <span id="miner_6">
                        <code>Cost 25000  Cross 250</code> <br>
                        <button onclick="add(6, false)" class="myButton" style="width: 200px; height: 25px;"><code>Crossing hyyyper</code></button>
                    </span>


                </fieldset>




                <fieldset id="unlocks" class="field_set" style="width: 250px;">
                    <legend><code>Unlocks</code></legend>

                    <code><span id="unlock_true"></span></code>

                    <span id="unlock_0">
                        <code>Cost 100  Cross bot</code> <br>
                        <button onclick="unlock(0, 100, 'unlock_0')" class="myButton" style="width: 200px; height: 25px;"><code>Unlock</code></button>
                        <hr>
                    </span>

                    <span id="unlock_1">
                        <code>Cost 250  Crossomat</code> <br>
                        <button onclick="unlock(1, 250, 'unlock_1')" class="myButton" style="width: 200px; height: 25px;"><code>Unlock</code></button>
                        <hr>
                    </span>

                    <span id="unlock_2">
                        <code>Cost 500  Crossomat 2.0</code> <br>
                        <button onclick="unlock(2, 500, 'unlock_2')" class="myButton" style="width: 200px; height: 25px;"><code>Unlock</code></button>
                        <hr>
                    </span>

                    <span id="unlock_3">
                        <code>Cost 2500  Crossing pro</code> <br>
                        <button onclick="unlock(3, 2500, 'unlock_3')" class="myButton" style="width: 200px; height: 25px;"><code>Unlock</code></button>
                        <hr>
                    </span>

                    <span id="unlock_4">
                        <code>Cost 10000  Crossing ultra</code> <br>
                        <button onclick="unlock(4, 10000, 'unlock_4')" class="myButton" style="width: 200px; height: 25px;"><code>Unlock</code></button>
                        <hr>
                    </span>

                    <span id="unlock_5">
                        <code>Cost 20000  Crossing mega</code> <br>
                        <button onclick="unlock(5, 20000, 'unlock_5')" class="myButton" style="width: 200px; height: 25px;"><code>Unlock</code></button>
                        <hr>
                    </span>
                    
                    <span id="unlock_6">
                        <code>Cost 100000 Crossing hyyyper</code> <br>
                        <button onclick="unlock(6, 100000, 'unlock_6')" class="myButton" style="width: 200px; height: 25px;"><code>Unlock</code></button>
                    </span>

                </fieldset>




                <fieldset class="field_set" style="width: 250px; position: absolute; left: 565px; top: 22px;">
                    <legend><code>Mutliplikatoren</code></legend>

                    <code><span id="multip_true"></span></code>                

                    <span id="multip_0">
                        <code>Cost 250  Cross x1.2</code> <br>
                        <button onclick="multip_add(1.2, 250, 'multip_0', 0)" class="myButton" style="width: 200px; height: 25px;"><code>Cross x1.2</code></button>
                        <hr>
                    </span>

                    <span id="multip_1">
                        <code>Cost 1000  Cross x2</code> <br>
                        <button onclick="multip_add(2, 1000, 'multip_1', 1)" class="myButton" style="width: 200px; height: 25px;"><code>Cross x2</code></button>
                        <hr>
                    </span>

                    <span id="multip_2">
                        <code>Cost 15000  Cross x20</code> <br>
                        <button onclick="multip_add(20, 15000, 'multip_2', 2)" class="myButton" style="width: 200px; height: 25px;"><code>Cross x20</code></button>
                        <hr>
                    </span>

                    <span id="multip_3">
                        <code>Cost 100000  Cross x200</code> <br>
                        <button onclick="multip_add(200, 100000, 'multip_3', 3)" class="myButton" style="width: 200px; height: 25px;"><code>Cross x200</code></button>
                    </span>
                    
                </fieldset>



            </fieldset>

        </div>
    </center>




    <?php
    ?>

    <script>

        console.log("sa");



    </script>


    <style>

        #main_fieldset {
            border-radius: 25px;
            width: 600px;

        }

        .field_set {
            border-radius: 25px;                


        }

        #all {
            position: relative;

        }



        .myButton {
            -moz-box-shadow:inset 4px -8px 0px -5px #ffffff;
            -webkit-box-shadow:inset 4px -8px 0px -5px #ffffff;
            box-shadow:inset 4px -8px 0px -5px #ffffff;
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
            background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
            background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
            background-color:#ffffff;
            -moz-border-radius:10px;
            -webkit-border-radius:10px;
            border-radius:10px;
            border:1px solid #dcdcdc;
            display:inline-block;
            cursor:pointer;
            color:#666666;
            font-family:Courier New;
            font-size:14px;
            font-weight:bold;
            padding:5px 35px;
            text-decoration:none;
            text-shadow:0px 0px 0px #ffffff;
        }
        .myButton:hover {
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f6f6f6), color-stop(1, #ffffff));
            background:-moz-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
            background:-webkit-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
            background:-o-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
            background:-ms-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
            background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#ffffff',GradientType=0);
            background-color:#f6f6f6;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }


    </style>
</body>
</html>
