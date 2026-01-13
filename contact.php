<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data safely
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);
    $user_type = htmlspecialchars($_POST["user_type"]); 

    // Save data to file
    $file = fopen("messages.txt", "a");
    fwrite($file, "$user_type | $name | $email | $message\n");
    fclose($file);

    // Message based on user type
    if ($user_type === "recruiter") {
        $success_text = "Thank you for reaching out regarding your hiring needs. Our recruitment team will contact you shortly.";
    } else {
        $success_text = "Thank you for your interest. Our team will review your profile and get back to you soon.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Message Sent | TechBridge</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #0f172a, #111827);
      min-height: 100vh;
    }

    .success-box {
      max-width: 520px;
      margin: 120px auto;
      background: #ffffff;
      padding: 42px 36px;
      border-radius: 16px;
      text-align: center;
      box-shadow: 0 20px 40px rgba(0,0,0,0.15);
    }

    .success-icon {
      font-size: 52px;
      color: #22c55e;
      margin-bottom: 18px;
    }

    h2 {
      font-weight: 600;
      margin-bottom: 10px;
      color: #111827;
    }

    p {
      font-size: 14px;
      line-height: 1.6;
      color: #4b5563;
    }

    .btn-primary {
      background-color: #111827;
      border: none;
      padding: 10px 24px;
    }

    .btn-primary:hover {
      background-color: #1f2937;
    }
  </style>
</head>

<body>

  <div class="success-box">
    <div class="success-icon">✅</div>

    <h2>Thank you, <?php echo $name; ?>!</h2>

    <p>
      <?php echo $success_text; ?>
    </p>

    <a href="index.php" class="btn btn-primary mt-3">
      Go Back to Website
    </a>
  </div>

</body>
</html>
