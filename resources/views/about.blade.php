@extends('layout.app')
@section('appContent')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
            margin:0;
            padding: 0;
        }
        /* body{ */
            /* height: 100%; */
            /* width: 100%; */
        /* } */
        .maindiv{
            margin-top: 0px;
            width: 100vw;
            height: 100vh;
            /* background-color: aqua; */
            position: relative;
            background-size: cover;

        }
        .cont{
            position: relative;
            height: 150%;
            width: 70%;
            margin-left: 210px;
            margin-top:50px;
            border: 2px solid black;
            border-radius: 10px;
            background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
            display: flex;
            flex-direction:column;
        }



        ul{
            display: flex;

        }
        .sec{
            padding-left:20px;
            margin-top: 70PX;
        }
        .mcont{
            padding: 25px;
        }
        P{
            padding: 30px;
            font-weight: bolder;
            font-size: large;
        }
        img{
            margin-left: 10px;
            margin-top: 20px;
            border: 2px solid black;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="maindiv">
        <div class="cont">
            <div class="incont">
                <ul>
                    <li>  <div class="img"><img height="800px" width="900px" src="./images/ab1.jpg" alt=""></div></li>
                    <li class="sec"><div class="rcont">  <div class="rcont">Born in Rosario, Argentina in 1987 Lionel Messi is widely held to be one of the greatest football players of his generation — and with good reason.
                        The record seven-time Ballon d’Or winner has conquered nearly every piece of football real estate there is to claim over the course of his illustrious football career.</div></li>
                </ul>





                </div>
            <div class="mcont">
                Flashing his prodigious talent from a very young age it was clear from the outset that Messi was a child phenom. At 13 years old, then receiving treatment for a growth hormone deficiency, Messi and his family relocated to Barcelona, where he began playing for FC Barcelona’s U14 team. Graduating quickly through the club’s ranks thanks to his ever-growing skill set Messi made his first senior appearance for the club at the age of 17.

                Messi’s relationship with Barcelona would grow to be long, wide-ranging and remarkably fruitful. In his 17 years with the side, he would help the Spanish football giants to lift 10 La Liga titles, four Champions league crowns and seven Copa del Rey trophies. When he eventually left the team in 2021 for French club Paris Saint-Germain the Argentine completed his time in La Liga as its top goal-scorer, with an eye-watering 474 successful shots to his name.

                For his national team, Messi has been no less of a standout. Messi’s Golden Ball-winning performance at the FIFA World Cup 2022 in Qatar helped Argentina to their first FIFA World Cup win after 36 years.

                In his five trips to the football World Cups, Messi has led Argentina to at least the quarter-finals on four occasions. He also came close to winning the FIFA World Cup in 2014 but Argentina fell to Germany 1-0 in the final.

            </div>
            <div class="bot">
                <P>“The Olympic gold in 2008 is the win that I value the most because it is a tournament that you may play only once in your life and involves many athletes from different disciplines” - Lionel Messi, Spanish Esquire</P>
            </div>
        </div>




        </div>
    </div>
</body>
</html>
@endsection
