<?php include_once('include/include.php'); ?>
<!DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE>Strona główna</TITLE>
        <?php include_once('elements/meta.php'); ?>
    </HEAD>
    <BODY>
        <?php include_once('elements/header.php'); ?>
        <MAIN>
            <div class="container">
                <!-- START last blogs -->
                    <h3>Ostatnie wpisy</h3>
                    
                    <div class="blogListHome">
                        
                        <!-- START one blog -->
                        <a href="one.php?id=1" class="oneBlog">
                            <div class="oneBlogPhoto" style="background-image:url('upload/tmp.jpg');"></div>
                            <div class="oneBlogTitle">
                                Tytuł wpisu
                            </div>
                            <div class="oneBlogDetails">
                                <time>30 października 2019</time>
                                <author>Stefan Batory</author>
                            </div>
                        </a>
                        <!-- END one blog -->
                        
                        <!-- START one blog -->
                        <a href="one.php?id=1" class="oneBlog">
                            <div class="oneBlogPhoto" style="background-image:url('upload/tmp.jpg');"></div>
                            <div class="oneBlogTitle">
                                Tytuł wpisu
                            </div>
                            <div class="oneBlogDetails">
                                <time>30 października 2019</time>
                                <author>Stefan Batory</author>
                            </div>
                        </a>
                        <!-- END one blog -->
                        
                        <!-- START one blog -->
                        <a href="one.php?id=1" class="oneBlog">
                            <div class="oneBlogPhoto" style="background-image:url('upload/tmp.jpg');"></div>
                            <div class="oneBlogTitle">
                                Tytuł wpisu
                            </div>
                            <div class="oneBlogDetails">
                                <time>30 października 2019</time>
                                <author>Stefan Batory</author>
                            </div>
                        </a>
                        <!-- END one blog -->
                        
                    </div>
                    
                    <a href="blog.php" class="homeMoreBlogs">
                        Zobacz wszystkie wpisy
                    </a>
                <!-- END last blogs -->
            </div>
        </MAIN>
        <?php include_once('elements/footer.php'); ?>
    </BODY>
</HTML>