var miner_define = [];
miner_define[0] = [0,0.05,10]; // 0 quantity, 0.1 cross per turn, 10 cost
miner_define[1] = [0,0.25,50];
miner_define[2] = [0,1,100];
miner_define[3] = [0,5,400];
miner_define[4] = [0,25,2500];
miner_define[5] = [0,100,10000];
miner_define[6] = [0,250,25000];

var unlocks = Array(7);

for (i = 0; i < unlocks.length ; i++) {
    unlocks[i] = false;    
}

var multip_array = Array(4);

for (i = 0; i < multip_array.length ; i++) {
    multip_array[i] = false;
        
}

var cross_per_turn = 0;



function add(miner_id,buy_all) {
    if (miner_define[miner_id][2] <= courrent_counter_money && unlocks[miner_id]) {
        miner_define[miner_id][0] += 1;
        cross_per_turn += miner_define[miner_id][1];
        courrent_counter_money -= miner_define[miner_id][2];
        
        courrent_counter_money = parseFloat(courrent_counter_money.toFixed(4));
        cross_per_turn = parseFloat(cross_per_turn.toFixed(4));
        
        document.getElementById("money_turn").innerHTML = cross_per_turn;
        document.getElementById("miner_anz").innerHTML = miner_define[miner_id][0];
        document.getElementById("user_money").innerHTML = courrent_counter_money;
        
    }
       
}


function over_line() {
    counter += (1 * multip) ;
    courrent_counter_money += (1 * multip);
    
    courrent_counter_money = parseFloat(courrent_counter_money.toFixed(4));
    counter = parseFloat(counter.toFixed(4));
    
    document.getElementById("user_counter").innerHTML = counter;
    document.getElementById("user_money").innerHTML = courrent_counter_money;
    
}


function unlock(miner_id, cost, remo_id) {
    if (cost <= courrent_counter_money) {
        unlocks[miner_id] = true;
        courrent_counter_money -= cost;
        
        document.getElementById("user_money").innerHTML = courrent_counter_money;
        document.getElementById(remo_id).remove();
        
        if (check_array(unlocks)) {
            document.getElementById("unlock_true").innerHTML = "Nothing to buy anymore";
        }
    
    }
}


function multip_add(change, cost, remo_id,id) {
    if (cost <= courrent_counter_money) {
        multip = change;
        courrent_counter_money -= cost;
        multip_array[id] = true;
        
        document.getElementById("user_money").innerHTML = courrent_counter_money;
        document.getElementById(remo_id).remove();
                
        if (check_array(multip_array)) {
            document.getElementById("multip_true").innerHTML = "Nothing to buy anymore";
            
        }
        
    }
    
}


function check_array(array) {
    for (i = 0; i < array.length ; i++) {
        if (array[i] == false) {
            return false;        
        }
    }
        
    return true;
}


setInterval(mine,100);
function mine() {
    courrent_counter_money += cross_per_turn / 10;    
    courrent_counter_money = parseFloat(courrent_counter_money.toFixed(4));
    
    miner_counter += cross_per_turn / 10;
    miner_counter = parseFloat(miner_counter.toFixed(2));
    
    document.getElementById("miner_counter").innerHTML = miner_counter;
    document.getElementById("user_money").innerHTML = courrent_counter_money;
    
    
}