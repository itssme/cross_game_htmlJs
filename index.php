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
            <code>Global counter <span id="user_counter">0</span></code> <br>
            <code>Courrent money <span id="user_money">0</span></code>
            
            
            
        </fieldset>
        
        <fieldset class="field_set" style="width: 250px; position: relative; left: 190px; top: -72px;">
            <legend>Miner Stats</legend>
            <code>Global miner counter <span id="miner_counter">0</span></code> <br>
            <code>Miners <span id="miner_anz">0</span></code> <br>
            <code>Money per Sec. <span id="money_turn">0</span></code>
            
            
        </fieldset>
        
        <br>
        <br>
        <br>
        <br>
        
        <fieldset class="field_set" style="height: 1000px; width: 825px; position: relative;">
            <legend>Buy stuff!</legend>
            
            <fieldset class="field_set" style="width: 250px; left: 2px; position: absolute;">
                <legend><code>Miners</code></legend>
                
                <span id="miner_0">
                    <code>Cost 10  Cross 0.1</code> <br>
                    <button onclick="add(0,false)" class="myButton" style="width: 200px; height: 25px;"><code>Cross bot</code></button>
                </span>
                
                <hr>
                
                <span id="miner_1">
                    <code>Cost 25  Cross 0.5</code> <br>
                    <button onclick="add(1,false)" class="myButton" style="width: 200px; height: 25px;"><code>Crossomat</code></button>
                </span>
                
            </fieldset>
            
            <fieldset id="unlocks" class="field_set" style="width: 250px;">
                <legend><code>Unlocks</code></legend>
                
                <code><span id="unlock_true"></span></code>
                
                <span id="unlock_0">
                    <code>Cost 100  Cross bot</code> <br>
                    <button onclick="unlock(0,100,'unlock_0')" class="myButton" style="width: 200px; height: 25px;"><code>Unlock</code></button>
                <hr>
                </span>
                
                <span id="unlock_1">
                    <code>Cost 250  Crossomat</code> <br>
                    <button onclick="unlock(1,250,'unlock_1')" class="myButton" style="width: 200px; height: 25px;"><code>Unlock</code></button>
                </span>
                
                
            </fieldset>
            
            <fieldset class="field_set" style="width: 250px; position: absolute; left: 565px; top: 22px;">
                <legend><code>Mutliplikatoren</code></legend>
                
                <code><span id="multip_true"></span></code>                
                
                <span id="multip_0">
                    <code>Cost 250  Cross x1.2</code> <br>
                    <button onclick="multip_add(1.2,250,'multip_0')" class="myButton" style="width: 200px; height: 25px;"><code>Cross x1.2</code></button>
                </span>
                
                
                
                
            </fieldset>
            
            
            
        </fieldset>
        
        </div>
    </center>
        
        
        
        
        <?php
        
        ?>
        
        <script>
        
        
        
        
        
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
