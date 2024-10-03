<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/jpeg" href="_5a5bd37a-dcca-4455-a063-879058258d1f.jpeg" sizes="16x16 32x32 48x48 64x64">
<title>Discussion</title>
<meta charset="utf-8">
<link rel="stylesheet" href="discussion.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</head>

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

<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>

<div class="container">

  <div class="panel panel-default" style="margin-top:50px">
    <div class="panel-body">
      <h3>Discussion</h3>
      <hr>
      <form name="frm" method="post">
          <input type="hidden" id="commentid" name="Pcommentid" value="0">
    <div class="form-group">
      <label for="usr">Write your name:</label>
      <input type="text" class="form-control" name="name" required>
    </div>
      <div class="form-group">
        <label for="comment">Write your question:</label>
        <textarea class="form-control" rows="5" name="msg" required></textarea>
      </div>
    <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
    </form>
    </div>
  </div> 

  <div class="panel panel-default">
    <div class="panel-body">
      <h4>Recent questions</h4>           
      <table class="table" id="MyTable" style="background-color: #000000; border:0px;border-radius:10px">
        <tbody id="record">
          
        </tbody>
      </table>
    </div>
  </div>

</div>
<footer style="background-color: #2e2e2e; colour: #ffffff; padding: 10px; text-align: center;">
        <p>&copy; 2024 <strong>CTU Buddy</strong>. All rights reserved.</p>
      </footer>
</body>
</html>