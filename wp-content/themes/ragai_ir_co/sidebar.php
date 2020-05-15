<div class="sidebar">
    <?php if(!dynamic_sidebar('sidebar')) : ?>
        <div class="widget">
            <h2>Kategorijos</h2>
            <ul>
            <?php wp_list_categories(array('title_li'=>'')); ?>
            </ul>
        </div>
    <?php endif; ?>
</div>	