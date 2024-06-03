<!DOCTYPE html>
<html>

<head>
    <title>BEDO Innovating Education</title>
    <style>
        body {

            margin: 0;
        }

        .container {
            text-align: center;
            margin-top: 50px;
            background: #1c1c1ceb;
            color: white;
            padding: 5px;
            border-radius: 12px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: orange;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px orange;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        .img {

            display: flex;
            justify-content: center;

        }

        img {

            object-fit: cover;
            width: 500px
        }

        Footer {

            width: 100%;
            height: 100%;
            background: ;
            margin-top: 207px;
            padding: 15px;




        }
    </style>
    <link rel="icon" href="./bedologo.jpg" type="image/icon type" />
</head>

<body>

    <div class="img">
        <img src="./bedologo.jpg" alt="logo" width="50%" height="50%">
    </div>


    <div class="container">
        <h2>GPIO 17 </h2>
        <label class="switch">
            <input type="checkbox" id="ledToggle">
            <span class="slider round"></span>
        </label>
    </div>


    <script>
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
    </script>


</body>
<Footer><i> Copyright &copy; BEDO Innovating Education </i></Footer>

</html>