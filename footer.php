<!-- 消息提示框 -->
<div class="modal fade" id="infoToast" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title puock-text" id="infoToastTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="czs-close-l t-md"></i></span>
                </button>
            </div>
            <div class="modal-body puock-text t-md" id="infoToastText">
            </div>
        </div>
    </div>
</div>
<footer id="footer">
    <div class="container">
        <div class="row row-cols-md-1">
            <div class="col-md-6">
                <div><span class="t-md pb-2 d-inline-block border-bottom border-primary"><i class="czs-about-l"></i> 关于我们</span></div>
                <p class="mt20 t-md"><?php echo pk_get_option('footer_about_me','') ?></p>
            </div>
            <div class="col-md-6">
                <div><span class="t-md pb-2 d-inline-block border-bottom border-primary"><i class="czs-link-l"></i> 友情链接</span></div>
                <div class="more-link mt20 t-md">
                    <?php
                    $link_cid = pk_get_option('index_link_id','');
                    if(!empty($link_cid)){
                        preg_match_all('/<a .*?>.*?<\/a>/', wp_list_bookmarks(array(
                            'category'=>$link_cid,
                            'category_before'=>'',
                            'title_li'=>'',
                            'echo'=>0
                        )), $links);
                        foreach ($links[0] as $link){
                            echo $link;
                        }
                    }
                    $link_page_id = pk_get_option('link_page','');
                    if(!empty($link_page_id)){
                        echo '<a target="_blank" href="'.get_page_link($link_page_id).'">更多链接</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="mt20 text-center t-md">
            <div class="info">
                <?php echo pk_get_option('footer_info') ?>
                <p>Theme by <a target="_blank" href="https://github.com/Licoy/wordpress-theme-puock">Puock</a></p>
            </div>
        </div>
    </div>
</footer>
</div>
<script data-no-instant src="<?php echo get_template_directory_uri(); ?>/assets/js/libs.min.js"></script>
<script>
    var global_params = {
        is_single:<?php echo is_single() ? 1: 0 ?>,
        is_pjax:<?php echo pk_is_checked('page_ajax_load') ? 1: 0 ?>,
    };
</script>
<?php if(is_single()): ?>
<?php if(!empty(pk_get_option('tj_code_footer',''))): ?>
    <script data-no-instant><?php echo pk_get_option('tj_code_footer',''); ?></script>
<?php endif; ?>
<script data-instant src="<?php echo get_template_directory_uri(); ?>/assets/js/qrcode.min.js"></script>
<?php endif; ?>
<script data-instant src="<?php echo get_template_directory_uri(); ?>/assets/js/pages.js"></script>
<script data-no-instant src="<?php echo get_template_directory_uri(); ?>/assets/js/pages-once.js"></script>
<script data-no-instant src="<?php echo get_template_directory_uri(); ?>/assets/js/inc.js"></script>
<?php get_template_part('templates/async','views') ?>
</body>
</html>