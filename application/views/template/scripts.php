<!-- Scripts -->
			<script src="<?php echo base_url(); ?>public/assets/js/jquery.min.js"></script>
			<script src="<?php echo base_url(); ?>public/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php echo base_url(); ?>public/assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php echo base_url(); ?>public/assets/js/browser.min.js"></script>
			<script src="<?php echo base_url(); ?>public/assets/js/breakpoints.min.js"></script>
			<script src="<?php echo base_url(); ?>public/assets/js/util.js"></script>
			<script src="<?php echo base_url(); ?>public/assets/js/main.js"></script>


	<?php 
		if(isset($scripts)){
			foreach($scripts as $script_name){
				$src = base_url() . "public/js/" . $script_name; ?>
					<script src= "<?=$src?>"></script>
					<?php 
			}
		}?>

	</body>
</html>
