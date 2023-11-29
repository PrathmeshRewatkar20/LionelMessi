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
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .cont{
            width: 100vw;
            height: 100vh;
        }
        .contain1{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        h2{
            font-size: 30px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-weight: bolder;
        }

    </style>
</head>
   <body>
    <div class="cont">
        <div class="contain1">
            <h2>Early life</h2>
            Messi started playing football as a boy and in 1995 joined the youth team of Newell’s Old Boys (a Rosario-based top-division football club). Messi’s phenomenal skills garnered the attention of prestigious clubs on both sides of the Atlantic. At age 13 Messi and his family relocated to Barcelona, and he began playing for FC Barcelona’s under-14 team. He scored 21 goals in 14 games for the junior team, and he quickly graduated through the higher-level teams until at age 16 he was given his informal debut with FC Barcelona in a friendly match.
        </div>
        <div class="contain1">
            <img src="./images/h1.jpg"  height="600px" width="530px">
            <h2>Club play</h2>

In the 2004–05 season Messi, then 17, became the youngest official player and goal scorer in the Spanish La Liga (the country’s highest division of football). Though only 5 feet 7 inches (1.7 metres) tall and weighing 148 pounds (67 kg), he was strong, well-balanced, and versatile on the field. Naturally left-footed, quick, and precise in control of the ball, Messi was a keen pass distributor and could readily thread his way through packed defenses. In 2005 he was granted Spanish citizenship, an honour greeted with mixed feelings by the fiercely Catalan supporters of Barcelona. The next year Messi and Barcelona won the Champions League (the European club championship) title.

Messi’s play continued to rapidly improve over the years, and by 2008 he was one of the most dominant players in the world, finishing second to Manchester United’s Cristiano Ronaldo in the voting for the 2008 Ballon d’Or. In early 2009 Messi capped off a spectacular 2008–09 season by helping FC Barcelona capture the club’s first “treble” (winning three major European club titles in one season): the team won the La Liga championship, the Copa del Rey (Spain’s major domestic cup), and the Champions League title. He scored 38 goals in 51 matches during that season, and he bested Ronaldo in the balloting for both the Ballon d’Or and FIFA’s world player of the year by a record margin. During the 2009–10 season Messi scored 34 goals in domestic games as Barcelona repeated as La Liga champions. He earned the Golden Shoe award as Europe’s leading scorer, and he received another Ballon d’Or (the award was known as the FIFA Ballon d’Or in 2010–15).
        </div>
        <div class="contain1">
            <img src="./images/h2.jpg" alt="" height="600px" width="530px">
            <h2>International career</h2>

Despite his dual citizenship and professional success in Spain, Messi’s ties with his homeland remained strong, and he was a key member of various Argentine national teams from 2005. He played on Argentina’s victorious 2005 FIFA World Youth Championship squad, represented the country in the 2006 World Cup, and scored two goals in five matches as Argentina swept to the gold medal at the Beijing 2008 Olympic Games. Messi helped Argentina reach the 2010 World Cup quarterfinals, where the team was eliminated by Germany for the second consecutive time in World Cup play. At the 2014 World Cup, Messi put on a dazzling display, scoring four goals and almost single-handedly propelling an offense-deficient Argentina team through the group stage and into the knockout rounds, where Argentina then advanced to the World Cup final for the first time in 24 years. Argentina lost that contest 1–0 to Germany, but Messi nevertheless won the Golden Ball award as the tournament’s best player. During the 2016 Copa América Centenario tournament, he netted his 55th international goal to break Gabriel Batistuta’s Argentine scoring record.
        </div>
    </div>


   </body>
   </html>
@endsection
