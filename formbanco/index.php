<html>
<head>
</head>
<body>
  <form action="processar.php" method="post">
    <p>
      <label for="nome">Nome do pais</label>
      <input type="text" id="nome" name="nome">
    </p>

    <p>
      <label for="presida">Nome do presidente</label>
      <input type="text" id="presida" name="presida">
    </p>

    <input type="submit" value="Go!">
  </form>
</body>
</html>

<?php echo phpinfo(); ?>