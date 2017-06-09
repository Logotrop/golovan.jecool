function myFunction() {
    var x = document.getElementById("navigace");
    if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}