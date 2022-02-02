<html>
<head>
  <style>

    h1, h2{
      text-align: center
    }

    div {
        box-sizing: border-box;
        border:2px solid Gray;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 10px;
        padding-right: 10px;

        margin: auto;
        width: 350px;
    }
    span {
        color: blue;
    }

    /* input[type="submit"]{
      box-sizing: border-box;
      border: none;
      padding: 5px; */
      /* background-color: rgb(68,0,249); /* Dark Blue */ */
      /* font-family: arial;
    }

    input[value="Return"]{
      color: white;
      margin-left: 10px;
    }

    input[value="Submit"]{
      color: white;
      margin-left: 190px;
    } */

  </style>
</head>


<body>
<h1>Thank you for your message!</h1>
<h2>Please review your submission below:</h2>

<div>
    First Name:
    <span> <?php echo $_POST["fname"]; ?><br></span>
<hr>
    Last Name:
  <span> <?php echo $_POST["lname"]; ?><br></span>
<hr>
    Email:
  <span> <?php echo $_POST["email"]; ?><br></span>
<hr>
    Phone Number:
  <span> <?php echo $_POST["phone"]; ?><br></span>
<hr>
    Comment Type:
  <span> <?php echo $_POST["comment_type"]; ?><br></span>
<hr>
    Message:
  <span> <?php echo $_POST["comment_section"]; ?><br></span>
<!-- <hr> -->
    <!-- <input type="submit" value="Return"> -->
    <!-- <input type="submit" value="Submit"> -->

</div>


</body>
</html>
