 <?php
    $site = "";
    if (isset($_POST['poga'])) {
        $site = 'https://biznesam.swedbank.lv/ievads';
    }
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Calculator</title>
     <link rel="stylesheet" href="./style.css">
 </head>

 <body>

     <nav>
     </nav>


     <div class="wrapper">
         <h1>Šeit Jūs variet aprēķināt savu neto algu</h1>
         <div class="bruto">
             <label for="bruto">Norādiet savu bruto algu:</label>
             <input type="range" min="1" max="1000" value="500" name="bruto" class="slider" id="bruto">
             <p id="rangeText"></p>
         </div>
         <div class="book">
             <label for="book">Norādiet vai Jums ir nodokļu grāmatiņa:</label>
             <select name="book" id="book">
                 <option selected value="Yes">Jā</option>
                 <option value="No">Nē</option>
             </select>
         </div>
         <button name="submit" id="submit">Aprēķināt</button>
         <div class="alga">
             <h3>Jūsu neto alga:</h3>
             <h2 id="summa">0.00 €</h2>
         </div>
         <form id="biz-button" action="<?php echo $site ?>" method="POST">
             <input type="submit" id="poga" name="poga" value="Viss biznesam">
         </form>
     </div>

     <footer></footer>

     <script src="./app.js"></script>
 </body>

 </html>