
let script = function(){
    var thisObj = this;

    this.showClock=function(){

    }
     this.toTwelveHourFormat=function(time){

    }
};

let loadscript = new script;
script.initializa();

function showClock() {
    let dateObj = new Date();
    let months = ["January", "February", 
        "March", "April", "May", "June", 
        "July", "August", "September", 
        "October", "November", "December"];
    let year = dateObj.getFullYear();
    let monthNum = dateObj.getMonth();
    let dateCal = dateObj.getDate();
    let hour = dateObj.getHours();
    let min = dateObj.getMinutes();
    let sec = dateObj.getSeconds();

    let timeFormatted = this.toTwelveHourFormat(hour);

    document.querySelector('.timeAndDate').innerHTML = (months[monthNum] + " " + dateCal + ", " + year + " " 
        + timeFormatted["time"] + ":" + min + ":" + sec + " " + timeFormatted["am_pm"]);
}

function toTwelveHourFormat(time) {
    let am_pm = "AM";
    if (time >= 12) {
        time = time === 12 ? 12 : time - 12;
        am_pm = "PM";
    } else if (time === 0) {
        time = 12;
    }

    return {
        time: time,
        am_pm: am_pm
    };

    this.initialixe = function(){
        this.showClock();
    }
}

setInterval(showClock, 1000);
