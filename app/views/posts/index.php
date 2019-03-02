<?php require APPROOT.'/views/inc/header.php'; ?>
<?php flash('post_message'); ?>
<div class="row mb-3">
    <div class="col-md-12 text-center">
        <h1>Recent Posts</h1>
    </div>
    <div class="col-md-12 text-center">
        <hr>
        <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary">
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
                <li class="list-group-item d-flex justify-content-between align-items-center active">
                    Recent Posts
                </li>
                <?php foreach($data['categories'] as $category) : ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <a href="<?php echo URLROOT ?>/posts/category/<?php echo $category ?>">
                        <?php echo $category ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- End channels Menu -->

        <div class="col-md-9">
            <?php foreach($data['posts'] as $post ) : ?>
            <div class="card card-body mb-2">

                <h4 class="card-title text-center">
                    <img src="<?php echo URLROOT; ?>/img/<?php echo $post->category; ?>.jpg" alt="" class="rounded">
                    <br>
                    <hr>
                    <strong>
                        <?php echo $post->title; ?></strong>
                </h4>
                <p class="card-text">
                    <?php echo $post->body; ?>
                </p>
                <div class="bg-light p-2 mb-3">
                    <small> Posted in <strong>
                            <a href="<?php echo URLROOT; ?>/posts/category/<?php echo $post->category; ?>"><?php echo $post->category; ?></a></strong> by
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