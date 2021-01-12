<?php include("navigation.php"); ?>
<h1>
    <?php
        echo "Hello world";
     ?>
</h1>
<form action="request.php" method="post">
    <label>Username</label>
    <input type="text" name="username">

    <label>Password</label>
    <input type="password">
    <button type=submit>
        Submit
    </button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="script.js"></script>