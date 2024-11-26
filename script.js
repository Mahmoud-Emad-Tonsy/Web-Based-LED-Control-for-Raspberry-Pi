 document.addEventListener("DOMContentLoaded", function () {
            var ledToggle = document.getElementById("ledToggle");

            ledToggle.addEventListener("change", function () {
                var xhr = new XMLHttpRequest();
                var url = ledToggle.checked ? "pinon.php" : "pinoff.php";
                xhr.open("GET", url);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4) {
                        if (xhr.status === 200) {
                            console.log("Success HTTP")
                        } else {
                            alert("HTTP ERROR");
                        }
                    }
                };
                xhr.send();
            });
        });
