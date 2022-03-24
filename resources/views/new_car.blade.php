@extends ( "layouts.master" )

@section( "content" )
<div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 
    offset-xl-4 offset-lg-4 offset-md-4 offset-sm-4">
        <!--offsettel 4 egységgel tesszük arréb az oszlopot-->
        <!-- végpontot kell megadnom hogy hova mutasson-->
        <form class="form-control mt-5 p-3" action="/store-car" method="post">
            @csrf
            <label for="plate" class="mt-2">Rendszám</label>
            <input class="form-control" type="text" name="plate">
            <label for="brand" class="mt-2">Márka</label>
            <input class="form-control" type="text" name="brand">
            <label for="color" class="mt-2">Szín</label>
            <input class="form-control" type="text" name="color">
            <label for="price" class="mt-2">Ár</label>
            <input class="form-control" type="text" name="price">
            <button class="btn btn-outline-primary mt-3" type="submit">Küldés</button>
        </form>
    </div>
</div>
@endsection