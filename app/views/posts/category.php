<?php 
    ### DUPLICATE CODE - make into helper function?
    $url = rtrim($_GET['url'], '/');
    $url = filter_var($url, FILTER_SANITIZE_URL);
    $url = explode('/', $url);
    $currentCategory = $url[2];
    $currentCategory = addSpaceBeforeCapital($currentCategory);
?>

<?php require APPROOT.'/views/inc/header.php'; ?>
<?php flash('post_message'); ?>
<div class="row mb-3">
    <div class="col-md-12 text-center">
        <h1>
            <?php echo $currentCategory?> Posts</h1>
    </div>
    <div class="col-md-12 text-center">
        <hr>
        <?php if($data['posts'] == null) : ?>
        <h6>There are no posts in this section yet. You can be the first to post in this channel by clicking the button
            below</h2>
        <hr>
        <?php endif; ?>     
        <a href="<?php echo URLROOT; ?>/posts/add/<?php echo $url[2]; ?>" class="btn btn-primary">
            <i class="fa fa-pencil"></i> Add Post
        </a>
    </div>
</div>
<div class="container">
    <div class="row">

        <!-- Channels Menu -->
        <div class="col-md-3">
            <h2>Channels</h2>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center ">
                    <a href="<?php echo URLROOT; ?>/posts">Recent Posts</a>
                </li>
                <?php foreach($data['categories'] as $category) : ?>
                <?php if(str_replace(' ','',$category) == str_replace(' ','', $currentCategory )) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center active">
                    <?php echo $category ?>
                </li>
                <?php else : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="<?php echo URLROOT ?>/posts/category/<?php echo $category ?>">
                        <?php echo $category ?></a>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- End channels Menu -->

        <div class="col-md-9">
            <?php foreach($data['posts'] as $post ) : ?>
            <div class="card card-body mb-2">
                <h4 class="card-title text-center">
                    <?php echo $post->title; ?>
                </h4>
                <p class="card-text">
                    <?php echo $post->body; ?>
                </p>
                <div class="bg-light p-2 mb-3">
                    <small> Written by
                        <strong>
                            <?php echo $post->name; ?></strong>
                        on
                        <?php echo $post->postCreated; ?></small>
                </div>

                <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-dark">
                    More
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php require APPROOT.'/views/inc/footer.php'; ?>