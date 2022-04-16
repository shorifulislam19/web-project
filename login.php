<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In </title>
 
<style>
    
    ::placeholder {
            color: black;
            opacity: 1;
        }
        
      
        
        html {
            background: #56565b;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
        }
        
        body {
            padding-top: 19vh;
        }
        
        .container {
            background: #3c3c42;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            height: 350px;
            width: 350px;
            box-shadow: -3px -2px 6px #6c6565, 7px 9px 25px #0b0b0b;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        input {
            height: 30px;
            border: 2px solid #e1dede69;
            border-radius: 5px;
            background: #777272;
            color: black;
            text-align: center;
            outline: none;
            font-size: 15px;
        }
        
        .form-item-username {
            /* margin: 5px;
            display: flex;
            padding-bottom: 10px; */
            margin: 0 auto;
            padding-bottom: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%;
        }
        
        .form-item-username input {
            /* width: 150px;
            margin: 0 5px; */
            margin: 5px;
            width: 100%;
        }
        
        .form-item {
            margin: 0 auto;
            padding-bottom: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 90%;
        }
        
        .form-item input {
            margin: 5px;
            width: 100%;
        }
        
        .accept-box {
            display: flex;
            align-items: center;
            margin: auto;
            font-size: 15px;
        }
        
        a {
            color: white;
        }
        
        a:hover {
            color: grey
        }
        
        .form-btns {
            display: flex;
            flex-direction: column;
            padding: 10px 0;
        }
        
        .form-btns button {
            margin: auto;
            font-size: 20px;
            padding: 8px;
            width: 280px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: rgb(75, 61, 61);
            background: #fbba50;
        }
        
        /* .form-btns  {
            cursor: not-allowed;
            background: #8f8b85 !important;
            color: rgb(131, 120, 120) !important;
        }
         */
        .form-btns button:hover {
            background: #d88a0c;
            color: antiquewhite;
        }
        
        .options {
            padding-top: 15px;
            margin: auto;
            font-size: 13px;
        }
        
        p {
            font-size: 12px;
        }
        
        .pwd-format {
            position: relative;
            color: rgb(65, 62, 62);
            background: rgb(243, 234, 243);
            font-size: 11px;
            width: 150px;
            padding: 5px;
            border-radius: 5px;
            top: 112px;
            right: -81px;
            z-index: 2;
            display: none;
        }
    
</style>


</head>

<body>

    <div class="container">
        <h2 style="padding-top: 30px;">Log In</h2>

        <form action="../validation.php" method="post">
            <div class="form-item-username">
                <input type="text" name="user" id="user" placeholder="Enter Your user Name">
            </div>

            <!-- <div class="form-item">
                <input type="email" name="email" id="email" placeholder="Enater Your Email">
            </div> -->

            <div class="form-item">
                <!-- add a password format display -->
                <span class="pwd-format">
                    8-15 AlphaNumeric Characters
                </span>
                <input type="password" name="password" id="password" placeholder="Enter password">
              
            </div>

            

            <div class="form-btns">
                <button class="login" type="submit" >LogIn</button>
                
            </div>

        </form>
        <!-- <p>Copyright &copy; yourwebsite.com</p> -->
    </div>

  

    

</body>

</html>