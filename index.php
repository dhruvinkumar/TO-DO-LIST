<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Todo List</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    // PHP code for fetching data from the database and displaying it in the <ul> element
  ?>
  <div class="wrapper">
    <form class="form">
      <div class="inputBox">
        <input type="text" id="txt" placeholder="Enter your Task" required>
        <button id="btn"><i class="fa fa-plus"></i></button>
      </div>
    </form>
    <ul id="data">

    </ul>
    <div class="footer">
      <p id="total_task"></p>
      <button id="clear">Clear</button>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
