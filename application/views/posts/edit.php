
  <?php  echo validation_errors(); ?>
  <?php echo form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <fieldset class="form-horizontal">
    <legend><h2><?= $title ?></h2></legend>


    <div class="form-group">
      <label class="col-lg-2 control-label">Title</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="title" autocomplete="off" placeholder="Add Title" value="<?php echo $post['title']; ?>"> 
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Body</label>
      <div class="col-lg-10">
        <textarea id="editor1" class="form-control" rows="5" name="body" placeholder="Add Body"><?php echo $post['body'];?></textarea>
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
      <div class="col-lg-10 col-lg-offset-2">
        <button class="btn btn-primary">Save</button>
      </div>
    </div>
  </fieldset>

 