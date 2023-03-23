<?php
require_once "header.php";




$post = mysqli_query($db, "SELECT * FROM posts ORDER BY post_id DESC");
$row = mysqli_fetch_assoc($post);
$post_text = $row['post_text'];
$post_date = $row['post_date'];
$post_id = $row['post_id'];
?>



<div class="tweet_body updata updata_body">
  <form action="up.php" method="post">
    <input type="hidden" name="post_id" value="<?php echo $row['post_id']; ?>">
    <textarea name="post_text" cols="100%" rows="3"><?php echo $post_text; ?></textarea>
    <div class="tweet_icons-wrapper">
      <div class="tweet_icons-add">
        <i class="far fa-image"></i>
        <i class="fa fa-chart-bar"></i>
        <i class="far fa-smile"></i>
        <i class="far fa-calendar-alt"></i>
      </div>

      <button class="button_tweet" type="submit">Update</button>

    </div>
  </form>
</div>