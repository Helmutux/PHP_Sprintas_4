<div class="footer">
                <div class="cpy">
                    <a href="<?php echo home_url(); ?>"><span>C</span>hoose <span>H</span>orns</a>
                    <p>Ragai ir Co. 2020<br />
                    Teisė kopijuoti ir platinti neribojama<br />
                    Sukūrė: <a href="http://donatas.site">Helmutux</a></p>
                </div>
                
                <?php if(!dynamic_sidebar('footer')) : ?>
                    <div class="menu-foot">
                        <h2>Kategorijos-kitos</h2>
                        <ul>
                            <?php wp_list_categories(array('title_li'=>'')); ?>
                        </ul>
                    </div>
                    <?php endif; ?>    
                
                <div class="menu-foot">
                    <h2>Puslapiai</h2>
                    <?php wp_nav_menu(array(
                        'theme_location'=>'menu', 
                        'container'=>'false',
                        'menu_class'=>''
                        )); ?>
                </div>				
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
