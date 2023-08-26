<form method="post" action="reset_password.php">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required>
  <button type="submit" name="submit">Submit</button>
</form>

<?php
if (isset($_POST['submit'])) {
  // Retrieve the submitted email
  $email = $_POST['email'];

  // Generate a unique token (e.g., using random_bytes() or any other secure method)
  $token = generateUniqueToken();

  // Store the token and email in your database or any other storage mechanism
  storeTokenInDatabase($email, $token);

  // Send an email to the user with a password reset link containing the token
  $resetLink = "http://yourwebsite.com/reset_password.php?token=$token";
  $message = "Please click the following link to reset your password: $resetLink";
  mail($email, "Password Reset", $message);

  // Display a success message to the user
  echo "Password reset instructions have been sent to your email.";
}
?>
//<a href="forgot_password.php">Forgot Password?</a>//