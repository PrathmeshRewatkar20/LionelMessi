@extends('layout.app')
@section('appContent')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
    overflow-x: hidden;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
.head
{
    text-align: center;
    font-family: 'Lora', serif;
     font-family: 'Mulish', sans-serif;
    font-size:2.7rem ;
    line-height: 2rem;
    font-weight: 700;
    color: white;
    padding: 10px;
    text-align: center;
    /* box-shadow: 5px 7px 12px 3px white; */
}

.cont{
    width: 100vw;
    /* height: 100vh; */
    background-image: linear-gradient(to right, #434343 0%, black 100%);gba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;
    background-image: linear-gradient(to right, #434343 0%, black 100%);

    background-position: center bottom;
    background-size:cover;
    min-height: 100vh;

    overflow-x: none;
    object-fit: contain;
            position: relative;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;

}
.maincon{margin-top: 20px;
    margin-left: 100px;
    display:grid;
    gap: 1.4rem;
    grid-template-columns: repeat(2,1fr);
    row-gap: 80px;
}
.cardcont{
display: flex;
flex-direction: column;
align-items: center;
border: 1px solid rgb(83, 82, 82);
border-radius: 8px;
overflow: hidden;
padding: 10px;
width: 360PX;
height: auto;
margin-left: 32px;
background-image: linear-gradient(to top, #cfd9df 0%, #e2ebf0 100%);
color: black;
transition: all;
}
.cardcont:hover{
    transform: scale(1.1);
    box-shadow:12px 5px 4px black,13px 6px 5px white;
    transition-duration: 2s;
}
h2{
    text-shadow: 12px 5px 4px black,13px 6px 5px white;
}
.cardhea{
    font-family: 'Lora', serif;
     font-family: 'Mulish', sans-serif;
     font-size: medium;
     font-weight: 900;
    text-decoration-color: black;
     line-height: 1rem;
}.cardh{
    text-align: left;
    margin-top: 10px;
}
.div2{
    margin-top: 10px;
}
img{
    border: 1px solid black;
    border-radius: 10px;
}
    </style>
    <link rel="stylesheet" href="achive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&family=Mulish:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&family=Mulish:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="cont">
        <div class="head"><h2>Achievement</h2></div>

        <main class="maincon">

            <div class="cardcont">
                <img height="400px" width="330px" src="https://www.forbesindia.com/media/images/2023/Jun/img_211577_1.gettyimages-1450388970-bg.jpg" alt="">
                <div class="cardhea">FIFA World Cup 2022</div>
                <div class="cardh"><div class="div1">Lionel Messi hoists the FIFA World Cup Trophy after leading his team to victory over France on December 18, 2022, in Lusail City, Qatar. The Qatar tournament was Messi’s last attempt at a title he coveted most, and his will prevailed. Messi was awarded the Golden Ball of the Tournament for his performance.
                </div>
                   </div>
            </div>
            <div class="cardcont">
                <img height="400px" width="330px" src="https://www.forbesindia.com/media/images/2023/Jun/img_211585_4.gettyimages-82525445-bg.jpg" alt="">
                <div class="cardhea">Olympic Gold Medal 2008
                </div>
                <div class="cardh"><div class="div1">Argentinian forwards Lionel Messi and Sergio Aguero show off their gold medals at the Beijing 2008 Olympic Games on August 23, 2008, in Beijing, China. Messi’s exquisite pass to Angel di Maria, who lobbed it in, won the gold for Argentina, beating Nigeria 1-0. “The Olympic gold in 2008 is the win that I value the most because it is a tournament that you may play only once in your life and involves many athletes from different disciplines,” Messi told Spanish Esquire during an interview in 2017.
                </div>
                   </div>
            </div>
            <div class="cardcont">
                <img height="400px" width="330px" src="https://www.forbesindia.com/media/images/2023/Jun/img_211587_5.gettyimages-53186057-bg.jpg" alt="">
                <div class="cardhea">FIFA Under-20 World Cup 2005
                </div>
                <div class="cardh"><div class="div1">Messi was just 18 years old and proved his worth to the world, scoring two penalties in the final to secure a 2-1 victory over Nigeria on July 2, 2005, in Utrecht, Netherlands and with it the U-20 World Cup trophy. Messi ended the tournament with the Golden Boot and the Golden Ball awards.
                </div>
                   </div>
            </div>
            <div class="cardcont">
                <img height="400px" width="330px" src="https://www.forbesindia.com/media/images/2023/Jun/img_211603_13.gettyimages-1488565133-bg.jpg" alt="">
                <div class="cardhea">The Laureus Award
                </div>
                <div class="cardh"><div class="div1">The Argentine legend picks up Laureus World Sportsman of the Year and Team of the Year Awards at a star-studded ceremony in Paris on May 08, 2023. Messi became the first athlete to win both awards in the same year, as the greatest footballer of his generation, arguably of all time, as he inspired Argentina to a dramatic victory at the 2022 FIFA World Cup
                </div>
                   </div>
            </div>
            <div class="cardcont">
                <img height="400px" width="330px" src="https://www.forbesindia.com/media/images/2023/Jun/img_211601_12.rtx3u5f5-bg.jpg" alt="">
                <div class="cardhea">Golden Boot Award
                </div>
                <div class="cardh"><div class="div1">Lionel Messi holds the Golden Boot award aloft before the match with Deportivo de La Coruna at Camp Nou, Barcelona, Spain on December 17, 2017.
                    European Golden Boot is a trophy presented each season to the leading goalscorer in league matches from the top division of a European national league. Lionel Messi is the only player to win the award six times, all with Barcelona. As of January 2023, Lionel Messi was FC Barcelona's all time top goalscorer, with a total of 672 goals
                </div>
                   </div>
            </div>
            <div class="cardcont">
                <img height="400px" width="330px" src="https://www.forbesindia.com/media/images/2023/Jun/img_211599_11.000_9tm6rq-bg.jpg" alt="">
                <div class="cardhea">Ballon D'Or Award
                </div>
                <div class="cardh"><div class="div1">Lionel Messi won the men's Ballon d'Or award for a record-extending seven times. A combination of photos shows Barcelona's forward receiving the Ballon d'Or football award (top, L to R) for the years 2009, 2010, 2011, 2012; (bottom, L to R) 2015, 2019, 2021, the award displayed at the ceremony in Paris on November 29, 2021.
                </div>
                   </div>
            </div>
            <div class="cardcont">
                <img height="400px" width="330px" src="https://www.forbesindia.com/media/images/2023/Jun/img_211589_6.000_1fz8eq-bg.jpg" alt="">
                <div class="cardhea">La Liga For FC Barcelona
                </div>
                <div class="cardh"><div class="div1">Barcelona's Argentinian forward Lionel Messi and Uruguayan forward Luis Suarez, with their children, celebrate becoming La Liga champions after winning the Spanish League football match between FC Barcelona and Levante UD at the Camp Nou stadium in Barcelona on April 27, 2019. Messi scored the only goal in the win. With Messi, FC Barcelona has won the La Liga Trophy a record ten times.
                </div>
                   </div>
            </div>
            <div class="cardcont">
                <img height="400px" width="330px" src="https://www.forbesindia.com/media/images/2023/Jun/img_211581_2.gettyimages-1401314429-bg.jpg" alt="">
                <div class="cardhea">Finalissima 2022
                </div>
                <div class="cardh"><div class="div1">Lionel Messi and his Argentine teammates celebrate with the Finalissima trophy, thrashing Italy 3-0 in the final in London, England, June 1st, 2022. Held only twice before, the third edition’s victory featured two assists from Messi, resulting in goals as they thrashed Italy 3-0.
                </div>
                   </div>
            </div>



















        </main>
    </div>

</body>
</html>
@endsection




































































































