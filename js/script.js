const local = {
    1: "/sequential/index.",
    2: "/prime-numbers/index.",
    3: "/century-calculator/index.",
    4: "/repeated-numbers/index."
}
function request(card) {
    var ajax = new XMLHttpRequest()

    ajax.open(
        "GET",
        local[card] + "html",
        true
    )

    ajax.onprogress = function () {
        
    };

    ajax.onload = function () {
        if (ajax.status == 200 && ajax.readyState == 4) {
            document.getElementById("container").style = "width: 90% !important; overflow-y: scroll;"
            document.getElementById("container").innerHTML = ajax.response
            document.getElementById("container").classList = "code"
            if (card == 1) {
                var arrowdown = document.createElement('i')
                arrowdown.classList = "fas fa-chevron-down fa-2x"
                arrowdown.id = "arrow-down"
                document.getElementById("container").appendChild(arrowdown)
                setInterval(function () {
                    arrowdown.remove()
                }, 3000)
                
            }
        }
    };
    ajax.send();
}