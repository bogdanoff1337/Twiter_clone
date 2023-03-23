<?php require_once "header.php"; ?>

<body>



  <?php
  if (isset($_POST['btn_add_post'])) {
    $Post_Text = $_POST['post_text'];
    if ($Post_Text != "") {
      $sql = "INSERT INTO posts (post_text,post_date) VALUES('$Post_Text', now())";
      $result = mysqli_query($db, $sql);
    }
  }
  ?>
  <div class="grid-container">
    <div class="sidebar">
      <ul style="list-style: none;">
        <li><i class="fab fa-twitter"></i></li>
        <li class="active_menu">
          <i class="fa fa-home"></i><span>Home</span>
        </li>
        <li><i class="fa fa-hashtag"></i><span>Explore</span></li>
        <li><i class="far fa-bell"></i><span>Notifications</span></li>
        <li><i class="far fa-envelope"></i><span>Massages</span></li>
        <li><i class="far fa-bookmark"></i><span>Bookmars</span></li>
        <li><i class="fa fa-list"></i><span>Lists</span></li>
        <li><i class="far fa-user"></i><span>Profile</span></li>
        <li><i class="fa fa-ellipsis-h"></i><span>More</span></li>

        <form action="register.php">
          <li style="padding: 10px 40px ;"> <button class="sidebar_tweet">Registration</button>
          </li>
        </form>
      </ul>
    </div>
    <div class="main">
      <p class="page_title">Home</p>
      <div class="tweet_box tweet_add">
        <div class="tweet_left">
          <img src="images/user.png" alt="">
        </div>
        <div class="tweet_body">
          <form action="login.php" method="post" enctype="multipart/form-data">
            <textarea name="post_text" id="" cols="100%" rows="3" placeholder="what's happening?"></textarea>
            <div class="tweet_icons-wrapper">
              <div class="tweet_icons-add">
                <i class="far fa-image"></i>
                <i class="fa fa-chart-bar"></i>
                <i class="far fa-smile"></i>
                <i class="far fa-calendar-alt"></i>
              </div>

              <button class="button_tweet" type="submit" name="btn_add_post">Tweet</button>

            </div>
          </form>
        </div>
      </div>


    </div>

    <?php require_once "right-sidebar.php"; ?>


    <?php
    //* delete tweet*// 
    if (isset($_GET['del'])) {
      $Del_ID = $_GET['del'];
      $sql = "delete from posts where post_id = '$Del_ID'";
      $post_query = mysqli_query($db, $sql);
      if ($sql) {
        header("location: index2.php");
      }
    }

    ?>
</body>

</html>