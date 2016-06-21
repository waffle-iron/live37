<?php $this->beginPage(); ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Luya &mdash; <?= $this->title; ?></title>

        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>

        <? if(YII_ENV == "local"): ?>
            <div style="display: block; position: fixed; left: 0; right: 0; top: -2px; bottom: -2px; z-index: 100; pointer-events: none;">
                <div style="position: absolute; left: 0; right: 0; text-align: center; margin: 20px; font-size: 50px; color: #fff; z-index: 1000; text-shadow: 0 0 5px rgba(0, 0, 0, 0.8);">
                    <span class="hidden-sm-up">XS</span>
                    <span class="hidden-xs-down hidden-md-up">SM</span>
                    <span class="hidden-sm-down hidden-lg-up">MD</span>
                    <span class="hidden-md-down hidden-xl-up">LG</span>
                    <span class="hidden-lg-down">XL</span>
                </div>
            </div>
        <? endif; ?>

        <!-- Just some sample bootstrap contents -->
        <!-- Delete these if you start your project -->
        <div class="container">

            <div class="jumbotron m-t-2">
                <h1 class="display-1">Installed successfully!</h1>
                <p class="lead">All content you see on this page is static. You can delete it in <code>views/layouts/main.php</code>.</p>
                <p class="lead">
                    <a class="btn btn-success btn-lg" href="<?= $this->publicHtml ?>/admin" role="button" target="_blank">» Admin</a>
                </p>
            </div>

            <div class="example">
                <div class="row">
                    <div class="col-md-1">.col-md-1</div>
                    <div class="col-md-1">.col-md-1</div>
                    <div class="col-md-1">.col-md-1</div>
                    <div class="col-md-1">.col-md-1</div>
                    <div class="col-md-1">.col-md-1</div>
                    <div class="col-md-1">.col-md-1</div>
                    <div class="col-md-1">.col-md-1</div>
                    <div class="col-md-1">.col-md-1</div>
                    <div class="col-md-1">.col-md-1</div>
                    <div class="col-md-1">.col-md-1</div>
                    <div class="col-md-1">.col-md-1</div>
                    <div class="col-md-1">.col-md-1</div>
                </div>
                <div class="row">
                    <div class="col-md-8">.col-md-8</div>
                    <div class="col-md-4">.col-md-4</div>
                </div>
                <div class="row">
                    <div class="col-md-4">.col-md-4</div>
                    <div class="col-md-4">.col-md-4</div>
                    <div class="col-md-4">.col-md-4</div>
                </div>
                <div class="row">
                    <div class="col-md-6">.col-md-6</div>
                    <div class="col-md-6">.col-md-6</div>
                </div>
            </div>

            <div class="card-columns">
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://placeholdit.imgix.net/~text?txtsize=80&txt=PLACEHOLDER&w=1000&h=800" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card title that wraps to a new line</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card card-block">
                    <blockquote class="card-blockquote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer>
                            <small class="text-muted">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card">
                    <img class="card-img-top img-fluid" src="https://placeholdit.imgix.net/~text?txtsize=80&txt=PLACEHOLDER&w=1000&h=800" alt="Card image cap">
                    <div class="card-block">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card card-block card-inverse card-primary text-xs-center">
                    <blockquote class="card-blockquote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
                        <footer>
                            <small>
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card card-block text-xs-center">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
                <div class="card">
                    <img class="card-img img-fluid" src="https://placeholdit.imgix.net/~text?txtsize=80&txt=PLACEHOLDER&w=1000&h=1000" alt="Card image">
                </div>
                <div class="card card-block text-xs-right">
                    <blockquote class="card-blockquote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer>
                            <small class="text-muted">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card card-block">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

        </div>
        <!-- / End of samples -->

        <div class="container">
            <?= $content ?>
        </div>

    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>