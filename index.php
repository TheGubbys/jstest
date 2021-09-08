<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Title</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <!-- <link href="css/styles.css" rel="stylesheet" type="text/css"> -->

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Her skal sidens indhold ligge -->
<div class="box"></div>

<script>
    /*
    const age = 20;
    let match = "20";
    let match2 = 30;

    console.log(typeof match);
    match = parseInt(match);
    console.log(typeof match);


    if(age >= match || age >= match2){
        console.log("Du er for ung!");
        document.body.textContent = "Du er for Ung!"
    }else if(age <= match || age <= match2){
        console.log("Du er for gammel!");
        document.body.textContent = "Du er for Ung!"
    };
    */

    /*
    const arr = ['Audi', "BMW", "VW"];
    console.log(arr)
    console.log(arr[0])
    console.log(arr[1])
    console.log(arr[2])
    console.log(arr[3])

    arr.push('Fiat', 'Opel');

    console.log(arr[3])
    console.log(arr[4])

    arr.splice(3, 1);
    */

    /*
    const car = {
        brand:"VW",
        price: 5,
        currency:"BTC",
        rate: 3000843.98,
        getPriceInDKK: function(){
            const priceInDKK = this.price * this.rate;
            return priceInDKK.toLocaleString() + ' DKK';
        }
    }

    console.log(car);
    console.log(car.getPriceInDKK());
    */

    //const arr = ['Audi', "BMW", "VW"];
    //const car = {brand:"VW", price: 5, currency:"BTC", rate: 3000843.98,}
    //  for(let i=0; i<arr.length; i++){
    //    console.log(arr[i]);
    //}

    class Car {
        constructor(brand, price){
            this.brand = brand;
            this.price = price;
            this.currenct = "BTC";
            this.rate =  3000843.98;
        }

        getPriceInDKK(){
            return this.price + this.rate + ' DKK';
        }
    }

    const carOne = new Car('VW', 5);
    const carTwo = new Car('BMW', 7);
    const carThree = new Car('Audi', 9);
    console.log(carOne);
    console.log(carTwo);
    console.log(carThree);

</script>
</body>
</html>
