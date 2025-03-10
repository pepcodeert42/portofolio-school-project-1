const tijd = new Date().getHours();
let begroet;

if (tijd < 5) {
    begroet = "Goeienacht";
} else if (tijd < 11) {
    begroet = "goeiemorgen welkom op mijn portofolio";
} else if (tijd < 17) {
    begroet = "goeiemiddag welkom op mijn portofolio";
} else {
    begroet = "goeieavond welkom op mijn portofolio";
}

function groet() {
    document.getElementById("begroeting").innerHTML = begroet + "welkom op mijn portofolio";
}



//de datum waar je naartoe count
let countDownDate = new Date("may 30, 2025 00:00:00").getTime();

//update elke seconde
let x = setInterval(function () {

    //krijg de datum van vandaag
    let now = new Date().getTime();

    //afstand tussen nu en countdown
    let distance = countDownDate - now;

    //tijd berekeningen
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

    //laat de countdown zien
    document.getElementById("timer").innerHTML = "Tot " + "eten " + days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

    //als countdown eindigd
    if (distance < 0){
        clearInterval(x);
        document.getElementById("timer").innerHTML = "ETENN";
    }
}, 1000 ); //einde countdown



//darkmode
function toggledarkmode(){
    let element =document.body;
    element.classList.toggle('dark-mode');
}  //einde darkmode



//cookie melding
//cookie tonen
function showCookieMelding(){
    document.getElementById("cookiemelding").style.display="flex";
}
//functie voor de cookie knop
function accepteer(){
    document.getElementById("cookiemelding").style.display="none";
    console.log("cookie geaccepteerd")

}

function negeer(){
    document.getElementById("cookiemelding").style.display="none";
    console.log("cookie genegeerd")
}

window.onload = showCookieMelding;
//einde cookie

let breed = window.innerWidth;

if (breed < 600) {
    console.log("klein")


}


