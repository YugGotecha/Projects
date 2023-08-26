<html>
<body>
<form method="post" action="process_reset_password.php">
  <label for="new_password">New Password:</label>
  <input type="password" id="new_password" name="new_password" required>
  <label for="confirm_password">Confirm Password:</label>
  <input type="password" id="confirm_password" name="confirm_password" required>
  <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>">
  <button type="submit" name="submit">Reset Password</button>
</form>
</body>
</html>
