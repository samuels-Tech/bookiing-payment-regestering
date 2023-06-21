<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>payment</title>
        <link rel="stylesheet" href="css/payment.css">
    </head>
    <body>
        <h2>Make offering</h2>
        <p>All types of offering are sent through this module</p>
        <form action="pay.html" method="post" >
            <label for="amt"></label>
            <input  class="amt "type="number" value="" placeholder="Enter any amount">
            <input  id="send" type="submit"  value="send" name="amount">
        </form >


  <script>
    let amount = document.querySelector(".amt");
let send = document.querySelector("#send");
var URLSearchParams = URL.searchParams;
send.addEventListener("click",(e)=>{
    e.preventDefault();
    var url = new URL("http://localhost/new/pay.html");
    let amt = amount.value;
    url.searchParams.set('amount',amt);
    
    window.location.assign(url);
})

  </script>
    </body>
    </html>