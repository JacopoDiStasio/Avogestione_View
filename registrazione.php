<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Registrazione</title>
</head>
<body>

  <h2>BENVENUTO!</h2>
  <h3>Inserisci i tuoi dati per registrarti</h3>

  <!-- Form per inviare i dati a salva_utente.php -->
  <form action="salva_utente.php" method="POST">

    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>

    <label for="ruolo">Ruolo:</label><br>
    <select id="ruolo" name="ruolo" required>
      <option value="">-- Seleziona --</option>
      <option value="studente">Studente</option>
      <option value="organizzatore">Organizzatore</option>
    </select><br><br>

    <input type="submit" value="Registrati">

  </form>
</body>
</html>
