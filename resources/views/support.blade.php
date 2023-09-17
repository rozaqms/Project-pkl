<!DOCTYPE html>
<html lang="en">

<head>

    <title>Nyan Cafe | {{$title}}</title>

    <!-- CSS File -->
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #20262a;
}

.ghost {
    cursor: pointer;
    position: relative;
    width: 160px;
    height: 180px;
    background: #f2f2f2;
    transform: translateY(-15px);
    border-radius: 70px 70px 0 0;
    animation: float 4s linear infinite;
}

@keyframes float {
    50% {
        transform: translateY(15px);
    }
}

.ghost .face {
    width: 120px;
    position: absolute;
    top: 60px;
    left: calc(50% - 60px);
}

.ghost .eyes {
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    margin-bottom: 18px;
}

.ghost .eyes span {
    width: 24px;
    height: 12px;
    background: #20262a;
    border-radius: 8px 8px 26px 26px;
    transition: .4s;
}

.ghost:hover .eyes span {
    height: 24px;
    border-radius: 50%;
}

.ghost .mouth {
    display: flex;
    justify-content: space-around;
}

.ghost .mouth span {
    width: 40px;
    height: 9px;
    background: #20262a;
    border-radius: 0 0 20px 20px;
    transition: .4s;
}

.ghost:hover .mouth span {
    height: 20px;
}

.ghost .hands {
    width: 220px;
    position: absolute;
    left: -30px;
    top: 90px;
    display: flex;
    justify-content: space-between;
}

.ghost .hands span {
    width: 30px;
    height: 30px;
    background: #f2f2f2;
    transform: translateY(-5px);
    animation: shake 4s linear infinite;
}

@keyframes shake {
    50% {
        transform: translateY(5px);
    }
}

.ghost .hands span:first-child {
    border-radius: 12px 0 0 20px;
}

.ghost .hands span:last-child {
    border-radius: 0 12px 20px 0;
    animation-delay: 2s;
}

.ghost .feet {
    width: 100%;
    display: flex;
    position: absolute;
    bottom: -20px;
}

.ghost .feet span {
    flex: 1;
    height: 22px;
    background: #f2f2f2;
    border-radius: 0 0 20px 20px;
}

.ghost .feet span:first-child {
    border-radius: 0 0 12px 20px;
}

.ghost .feet span:last-child {
    border-radius: 0 0 20px 12px;
}
    </style>

</head>

<body>

    <div class="ghost" onclick="playAudio()">
        <div class="face">
            <div class="eyes">
                <span></span>
                <span></span>
            </div>
            <div class="mouth">
                <span></span>
            </div>
        </div>
        <div class="hands">
            <span></span>
            <span></span>
        </div>
        <div class="feet">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <audio autoplay src="/assets/media/misc/snowfall.mp3" type="audio/mpeg" id="myAudio"></audio>
    <script>
        function playAudio() {
            var audio = document.getElementById("myAudio");
            if (audio.paused) {
                audio.play();
            } else {
                audio.pause();
            }
        }
    </script>
</body>

</html>