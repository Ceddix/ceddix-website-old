/* Main */
function tooltipFadeOut(social) {
    let node = document.getElementById(social);
    node.style.visibility = "visible";
    setTimeout(function () {node.style.visibility = "";}, 200)
}

/* Easter-Eggs */
function titelreverse() {
    let node = document.getElementById("title");
    node.innerHTML =  node.innerHTML .split("").reverse().join("");
}