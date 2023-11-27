<?php
  session_start();
   if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
      
    header("location:log-in.php");

   }





?>

<?php
     include 'nav.php';
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stle.css">
</head>
<body>
      <h1>Search Your Image</h1>
      <form>
      <input type="text" id="Search" placeholder="Search">
      <input type="Submit" id="sub" placeholder="Get Photo">



      </form>
      <div id="images">

        <!-- <div class="image">
       
            <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1143&q=80" alt="Img">
            <a href="https://unsplash.com/photos/gKXKBY-C-Dk" rel="noopener noreferer" target="_blank">Cute cat</a>

        </div>
        <div class="image">
       
            <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1143&q=80" alt="Img">
            <a href="https://unsplash.com/photos/gKXKBY-C-Dk" rel="noopener noreferer" target="_blank">Cute cat</a>

        </div>

        <div class="image">
       
            <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1143&q=80" alt="Img">
            <a href="https://unsplash.com/photos/gKXKBY-C-Dk" rel="noopener noreferer" target="_blank">Cute cat</a>

        </div> -->





      </div>
      <button id="next">Next</button>
      <script src="script.js"></script>



</body>
</html>