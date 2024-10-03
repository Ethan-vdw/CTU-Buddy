<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share Resources</title>
    <link rel="stylesheet" href="Resources.css">
    <link rel="icon" type="image/jpeg" href="_5a5bd37a-dcca-4455-a063-879058258d1f.jpeg" sizes="16x16 32x32 48x48 64x64">

</head>
<body>

  <nav>
          <ul class="navbar">
          <li class="logo"><a href="https://ctutraining.ac.za/gqeberha-campus/"><img src="_5a5bd37a-dcca-4455-a063-879058258d1f.jpeg" alt="CTU Buddy"></a></li>
              <li><a href="Home.html">Home</a></li>
              <li><a href="About.html">About Us</a></li>
              <li><a href="TimeTable.html">Timetable</a></li>
              <li><a href="Index.php">Discussion</a></li>
              <li><a href="Resoures.php">Share Resource</a></li>
              <li><a href="Contact.html">Contact Us</a></li>
          </ul>
      </nav>

  <form class="upload-form" action="upload.php" method="post" enctype="multipart/form-data" onsubmit="showSpinner()">
    <h1>Select a File to Upload</h1>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
    <input type="button" value="Download Files" id="download-btn">
  </form>

  <script>
    document.getElementById('download-btn').addEventListener('click', function() {
        window.location.href = 'downloads.php';
    });
  </script>

</body>
<footer style="background-color: #2e2e2e; padding: 10px; text-align: center;">
        <p>&copy; 2024 <strong>CTU Buddy</strong>. All rights reserved.</p>
      </footer>
</html>

