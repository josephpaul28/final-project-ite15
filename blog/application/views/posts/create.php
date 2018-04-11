<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
	<div class="form-group">
		<label>Title</label>
		<input type="text" class="form-control" name="title" placeholder="add Title">
	</div>
	<div class="form-group">
		<label>body</label>
		<textarea class="form-control" name="body" placeholder="add body"></textarea>
	</div>
	<button type="submit" class="btn btn-default">Submit</button>
</form>