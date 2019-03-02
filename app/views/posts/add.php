<?php 
    ### DUPLICATE CODE - make into helper function?
    $url = rtrim($_GET['url'], '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);

    if (isset($url[2])) {
        $currentCategory = $url[2];
    }
?>

<?php require APPROOT.'/views/inc/header.php'; ?>

<a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>

<div class="card card-body bg-light mt-5">

    <?php flash('register_success'); ?>

    <h2 class="text-center">Add Post</h2>

    <form action="<?php echo URLROOT; ?>/posts/add" method="post">

        <div class="form-group">
            <strong><label for="body">Choose a category: <sup>*</sup></label></strong>
            <select name="category" class="custom-select custom-select-lg mb-3">
                <?php foreach($data['categories'] as $category) : ?>
                    <?php if($currentCategory == str_replace(' ','',$category) || $data['category'] == str_replace(' ','',$category)) : ?>
                        <option <?php echo ' selected '; ?> value="<?php echo str_replace(' ','',$category); ?>"><?php echo $category ?></option>
                    <?php else : ?>
                        <option  value="<?php echo str_replace(' ','',$category); ?>"><?php echo $category ?></option>
                    <?php endif ; ?>                   
                <?php endforeach; ?>
            </select>       
        </div>
        
        <div class="form-group">
            <label for="title">Title: <sup>*</sup></label>
            <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>                    
        </div>

        <div class="form-group">
            <label for="body">Body: <sup>*</sup></label>
            <textarea name="body" class="form-control form-control-lg 
            <?php echo (!empty($data['body_err'])) ? 'is-invalid' : '';?>"><?php echo $data['body']; ?></textarea>
            <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>          
        </div>

        <input type="submit" value="Submit" class="btn btn-success">

    </form>

</div>

<?php require APPROOT.'/views/inc/footer.php'; ?>