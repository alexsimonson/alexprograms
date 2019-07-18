@extends('header')
@section('title', 'Users')

@section('content')
<div class='card'>
    <div class='card-header'>
        <h1>Game Development</h1>
    </div>
    <div class='card-body'>
        <ul class='list-group list-group-flush'>
            <li class='list-group-item'>
                <div class='row'>
                    <div class='col-12 col-lg-4 col-xl-2'>
                        <h2>Ransacked</h2>
                        <h3>Real Nifty Games</h3>
                        <p>Ransacked is a third person stealth thieving game, where you can steal almost anything.  Built in Unreal Engine 4 for my second workshop class, I primarily advanced my knowledge by crafting AI for the guards.  The many states of this AI include patrolling, chasing, searching (after initially losing sight of player), and replacing lost items.  Huge shoutout to the art team for their vision and style on this game.</p>
                    </div>
                    <div class='col-12 col-lg-8 col-xl-10'>
                        <img src='https://alexprograms.appspot.com/images/Thief2.png' width='100%'>
                    </div>
                </div>
            </li>
            <li class='list-group-item'>
                <div class='row'>
                    <div class='col-12 col-lg-4 col-xl-2'>
                        <h2>Madhouse</h2>
                        <h3>Goliath Games Studios</h3>
                        <p>Madhouse is a psychological thriller made in Unreal Engine 4, based around investigating an abandoned asylum.  This was made in my first workshop class at UCF, and was my first experience using UE4.  I utilized blueprints to implement UI, sound, puzzles and other miscellaneous gameplay events.  Another shoutout to the art team for their incredible talent.</p>
                    </div>
                    <div class='col-12 col-lg-8 col-xl-10'>
                        <img src='https://alexprograms.appspot.com/images/MadhousePoster.png' width='100%'>
                    </div>
                </div>
            </li>
            <li class='list-group-item'>
                <div class='row'>
                    <div class='col-12 col-lg-4 col-xl-2'>
                        <h2>Time Tear</h2>
                        <h3>Rhinoheart Studios</h3>
                        <p>The only other project worth mentioning from the game design days.  This was my first extended project within Unity, and was completed during my Game Production class at UCF.  I worked as both a programmer, and level designer on this game.  My tasks ranged from programming main game mechanics (guns, movement, objective progression), creating UI's (photoshop and unity), and laying out the levels within the game engine based on our paper designs.  I also had to make a prop or two to fit all the requirements for the class.</p>
                    </div>
                    <div class='col-12 col-lg-8 col-xl-10'>
                        <div style='position:relative; padding-bottom:calc(48.77% + 44px)'><iframe src='https://gfycat.com/ifr/SlimyCarefreeGermanwirehairedpointer' frameborder='0' scrolling='no' width='100%' height='100%' style='position:absolute;top:0;left:0;' allowfullscreen></iframe></div><p> <a href="https://gfycat.com/slimycarefreegermanwirehairedpointer">via Gfycat</a></p>
                    </div>
                </div>
            </li>
        </ul>
        
    </div>
</div>
<div class='card'>
    <div class='card-header'>
        <h1>Music</h1>
    </div>
    <div class='card-body'>
        <div class='row' id='soundcloud'>    
            <div class='col-12 col-md-12 col-lg-6 col-xl-4' id='mistakesWereMade'>
                <iframe width='100%' height='166' scrolling='no' frameborder='no' src='https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/120588766&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false'></iframe>
            </div>
    
            <div class='col-12 col-md-12 col-lg-6 col-xl-4' id='DMR'>
                <iframe width='100%' height='166' scrolling='no' frameborder='no' src='https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/300368128&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false'></iframe>
            </div>
    
            <div class='col-12 col-md-12 col-lg-6 col-xl-4' id='chordSweep'>
                <iframe width='100%' height='166' scrolling='no' frameborder='no' src='https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/299246971&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false'></iframe>
            </div>
    
            <div class='col-12 col-md-12 col-lg-6 col-xl-4' id='demo1'>
                <iframe width='100%' height='166' scrolling='no' frameborder='no' src='https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/298996534&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false'></iframe>
            </div>
        </div>
    </div>
</div>
@endsection