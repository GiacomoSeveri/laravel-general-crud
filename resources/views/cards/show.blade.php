 @vite('resources/js/app.js')


<div class="container show d-flex justify-content-between g-3 align-items-center mt-5">
   <img src="{{$card->img}}" class="me-5">

   <div class="descriptions">
   <h3><span class="text">Nome: </span > {{$card->name_card}}</h3>
   <h3><span class="text">Costo:</span > {{$card->coast}}</h3>
   <h3><span class="text">Tipo:</span > {{$card->type_card}}</h3>
   <h3><span class="text">Edizione:</span > {{$card->ed}}</h3>
   <h3><span class="text">Effetto: </span >{{$card->effect}}</h3>
   <h3><span class="text">Descrizione: </span >{{$card->text}}</h3>
   <h3><span class="text">Forza:</span > {{$card->force}}</h3>
   <h3><span class="text">Costituzione:</span > {{$card->force}}</h3>
   
   </div>



</div>

<div class="container mt-5">

    <a href="edit" class="btn btn-success">modifica</a>
    <a href="{{route('index')}}" class="btn btn-primary">indietro</a>
    <a href="TODO" class="btn btn-danger">Elimina</a>
</div>