
  <fieldset class="form-horizontal">
    <legend><h2><?= $title ?></h2></legend>

	<?php  echo validation_errors(); ?>
	<?php echo form_open_multipart('posts/create'); ?> <!--add multipart to active file upload-->

    <div class="form-group">
      <label class="col-lg-2 control-label">Title</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="title" placeholder="Add Title" autocomplete="off"> 
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Body</label>
      <div class="col-lg-10">
        <textarea id="editor1" class="form-control" rows="5" name="body" placeholder="Add Body"></textarea>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Category</label>
      <div class="col-lg-10">
          <select name="category_id" class="form-control">
          <?php foreach ($categories as $category): ?>
              <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
          <?php endforeach; ?>
          </select>
       </div>   
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Upload Photo</label>
      <div class="col-lg-10">
      <input class="form-control" type="file" name="userfile" size="20">
    </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button class="btn btn-primary">Save</button>
      </div>
    </div>
  </fieldset>

 