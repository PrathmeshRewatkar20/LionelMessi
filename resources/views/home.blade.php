@extends('layout.app')
@section('appContent')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #848181;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .image-slideshow {
        /* margin-top: 20px */
            max-width: 80%;
            position: relative;
            margin: auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin-top: 20px;
        }

        .image {
            position: relative;
        }

        .image img {
            width: 100%;
            display: block;
        }

        .image-bg {
            background-color: #ddd; /* Light gray background */
        }

        .fade {
            animation-name: fade;
            animation-duration: 2s;
        }

        @keyframes fade {
            from {
                opacity: .5;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="image-slideshow">

        <div class="image fade">
            <div class="image-bg">
                <img src="./images/ma1.jpg" alt="Mountain Top">
            </div>
        </div>

        <div class="image fade">
            <div class="image-bg">
                <img src="./images/ma2.jpg" alt="Palm Trees">
            </div>
        </div>

        <div class="image fade">
            <div class="image-bg">
                <img src="./images/ma3.jpg" alt="Neon Sign">
            </div>
        </div>

        <div class="image fade">
            <div class="image-bg">
                <img src="./images/ma4.jpg" alt="Mountain Top">
            </div>
        </div>

        <div class="image fade">
            <div class="image-bg">
                <img src="./images/ma5.jpg" alt="Mountain Top">
            </div>
        </div>

        <div class="image fade">
            <div class="image-bg">
                <img src="./images/ma6.jpg" alt="Mountain Top">
            </div>
        </div>

    </div>

    <script>
        let index = 0;
        displayImages();

        function displayImages() {
            let i;
            const images = document.getElementsByClassName("image");

            for (i = 0; i < images.length; i++) {
                images[i].style.display = "none";
            }

            index++;

            if (index > images.length) {
                index = 1;
            }

            images[index - 1].style.display = "block";
            setTimeout(displayImages, 2000);
        }
    </script>
</body>
</html>
@endsection
