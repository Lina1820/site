let switchMode = document.getElementById("flexCheckDefault");

switchMode.onclick = function () {
    let theme = document.getElementById("theme");

    if (theme.getAttribute("href") == "assets/css/light-mode.css") {

        theme.href = "assets/css/dark-mode.css"

    } else {
        theme.href = "assets/css/light-mode.css"
    }
    }