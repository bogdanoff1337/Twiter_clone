<?php
session_start();



$data = mysqli_query($db, "SELECT * FROM posts ORDER BY post_id DESC");
while ($row = mysqli_fetch_assoc($data)) {
  $post_text = $row['post_text'];
  $post_date = $row['post_date'];
  $post_id = $row['post_id'];
?>
  <div class="tweet_box">
    <div class="tweet_left">
      <img src="images/user.png" alt="">
    </div>
    <div class="tweet_body">
      <div class="tweet_header">
        <p class="tweet_name"></p>
        <p class="p tweet_username"><?php echo $_SESSION['username']; ?></p>
        <p class="tweet_date"><?php echo $post_date = date('M d'); ?> </p>
      </div>
      <p class="tweet_text"> <?php echo $post_text; ?> </p>
      <div class="tweet_icons">
        <a href=""><i class="far favomment"></i></a>
        <a href=""><i class="fa fa-reply"></i></a>
        <button class="like__btn">
          <span id="icon"><i class="far fa-thumbs-up"></i></span>

        </button>
        <a href=""><i class="fa fa-upload"></i></a>
        <a href="updata.php?post_id=<?php echo $row['post_id']; ?>"><i class="fa-solid fa-code-compare"></i></a>

      </div>

    </div>
    <div class="tweet_del">
      <div class="dropdawn">
        <button class="dropbtn"><span class="fa fa-ellipsis-h"></span></button>
        <div class="dropdawn-content">
          <a href="index.php?del=<?php echo $row['post_id']; ?>"><i class="far fa-trash-alt"></i><span>Delete</span></a>
        </div>

      </div>
    </div>
  </div>
<?php
}
?>