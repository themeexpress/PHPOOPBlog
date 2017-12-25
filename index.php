<?php include "lib/Database.php"; ?>
<?php include 'inc/header.php';?>	
<?php include "helpers/format.php";?>
<?php include 'inc/slider.php'; ?>
<?php 
//initiating object of database
$db= new Database();
$df= new Dateformet();
$sql= "SELECT * FROM tbl_posts limit 3";
$allposts=$db->select($sql);

?>
	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<?php if($allposts){
			 		foreach($allposts as $posts){
			
			?>
			<div class="samepost clear">
				<h2><a href="post.php?id=<?php echo $posts['post_id']; ?>"><?php echo $posts['title']; ?></a></h2>
				<h4><?php echo $df->formetdate($posts['date']); ?>, By <a href="#"><?php echo $posts['author']; ?></a></h4>
				 <a href="#"><img src="images/post1.jpg" alt="post image"/></a>
				<p>
					<?php echo $df->Excerttext($posts['body']); ?>
				</p>
				<div class="readmore clear">
					<a href="post.php?id=<?php echo $posts['post_id'];?>">Read More</a>
				</div>
			</div>
			<?php }//end foreach loop
			 }//end if 			 
			 else {
			 header('location:404.php');
			}?>
		

		</div>
		<?php include'inc/sidebar.php';?>
	</div>

	<?php include'inc/footer.php';?>