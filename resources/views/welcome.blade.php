<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>YU-GI-OH CARDS</title>
</head>

<body>
    <div class="container">

        <!-- recorro la lista que me proporciona la api -->
        @foreach ($card as $cardMonster)
            <section>
                <div class="info-simple">
                    <!-- obtengo la imagen y el nombre -->
                    <img src="{{$cardMonster['card_images'][0]['image_url'] }}" alt="">
                    <h1>{{$cardMonster['name']}}</h1>
                </div>

                <div class="desc">
                    <h2>{{$cardMonster['desc']}}</h2>
                </div>
            </section>
        @endforeach
    </div>
</body>

</html>