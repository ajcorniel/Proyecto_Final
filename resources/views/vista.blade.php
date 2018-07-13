@extends('layout')

@section('contenido')
<style type="text/css">
body {
	background: url(https://i.kym-cdn.com/entries/icons/mobile/000/015/848/465f34c9f38e15a7d8639de9b674438c.jpg);
	background-size: cover;
}
	input, section{
    width: 25em;
}

section{
    border: .1em lightgray solid;
    margin: 1em 3.5em;
}

div{
    border-bottom: .1em lightgray solid;
    height: 5em;
    cursor: pointer;
}

div:hover{
    background: whitesmoke;
}

div:last-child{
    border: 0;
}

div span{
    position: absolute;
    margin: 1.75em 0 0 1em;
    color: darkblue;
    font-family: Verdana;
}

img{
    width: 7em;
    height: 5em;
}
</style>
<h1>
	Archivos de la wiki
</h1>
<label for = "search">Memes relevantes de 2018</label>
<input type = "text" id = "search" placeholder = "Your choice" autofocus />
<section>
    <div>
        <img src = "https://res.cloudinary.com/teepublic/image/private/s--p2P11Zli--/t_Preview/b_rgb:ffffff,c_limit,f_jpg,h_630,q_90,w_630/v1515320705/production/designs/2260473_1.jpg" />
        <span>
        		Uganda Knuckles
    	</span>
    </div>
    <div>
        <img src = "https://pixel.nymag.com/imgs/daily/following/2015/11/06/loss.nocrop.w710.h2147483647.jpg" />
        <span>
        		Loss
        </span>
    </div>
    <div>
        <img src = "https://static01.nyt.com/images/2016/09/28/us/28xp-pepefrog/28xp-pepefrog-articleLarge.jpg?quality=75&auto=webp&disable=upscale" />
        <span>
        		Pepe The Frog
        </span>
    </div>
    <div>
        <img src = "https://i.imgur.com/PkIeN4J.jpg" />
        <span>
        	друг
        </span>
    </div>
    <div>
        <img src = "https://vignette.wikia.nocookie.net/terraria/images/8/87/Weird_russian_singer_-_Chum_Drum_Bedrum/revision/latest?cb=20170115194723&path-prefix=es" />
        <span>
        	Weird Russian Singer
        </span>
    </div>
    <div>
        <img src = "https://i.ytimg.com/vi/cRpdIrq7Rbo/hqdefault.jpg" />
        <span>
        	Kazoo Kid
        </span>
    </div>
    <div>
        <img src = "https://i.kym-cdn.com/photos/images/original/001/265/329/e83.png" />
        <span>
        		The Virgin & The Chad
        </span>
    </div>
    <div>
        <img src = "https://pbs.twimg.com/media/DVE2wReX4AAzIpK.jpg" />
        <span>
        	Goose on fire
        </span>
    </div>
    <div>
        <img src = " https://i.ytimg.com/vi/6StS5-7CptQ/hqdefault.jpg" />
        <span>
              El Maestruli
        </span>
    </div>
</section>

<script type="text/javascript"">
	var search = document.getElementById("search"),
    food = document.getElementsByTagName("span"),
    forEach = Array.prototype.forEach;

search.addEventListener("keyup", function(e){
    var choice = this.value;
  
    forEach.call(food, function(f){
        if (f.innerHTML.toLowerCase().search(choice.toLowerCase()) == -1)
            f.parentNode.style.display = "none";        
        else
            f.parentNode.style.display = "block";        
    });
}, false);
</script>
@endsection