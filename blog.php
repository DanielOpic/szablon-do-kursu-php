<?php include_once('include/include.php'); ?>
<!DOCTYPE html>
<HTML>
    <HEAD>
        <TITLE>Blog</TITLE>
        <?php include_once('elements/meta.php'); ?>
    </HEAD>
    <BODY>
        <?php include_once('elements/header.php'); ?>
        <MAIN>
            <div class="container">
                <!-- START blogs -->
                    <h3>Wszystkie wpisy</h3>
                    
                    <form class="blogFinder" method="POST" action="blog.php">
                        <input type="text" name="search" placeholder="szukaj"/>
                        <input type="submit">
                    </form>
                    
                    
                    <div class="blogList">
                        
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
                    
                        
                    <div class="paginacja">
                        <a href="blog.php?page=1" class="active">1</a>
                        <a href="blog.php?page=2">2</a>
                        <a href="blog.php?page=3">3</a>
                        <a href="blog.php?page=4">4</a>
                        <a href="blog.php?page=5">5</a>
                    </div>
                    
                <!-- END blogs -->
            </div>
        </MAIN>
        <?php include_once('elements/footer.php'); ?>
    </BODY>
</HTML>