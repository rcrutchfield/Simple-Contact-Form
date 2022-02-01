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
        width: 370px;
    }
    span {
        color: blue;
    }

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
  <span> <?php echo $_POST["query"]; ?><br></span>
<hr>
    Message:
  <span> <?php echo $_POST["comment_section"]; ?><br></span>
</div>

</body>
</html>
