<?php
/**
* The template for displaying the footer.
*
* @package Salient WordPress Theme
* @version 10.5
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$nectar_options = get_nectar_theme_options();
$header_format  = ( !empty($nectar_options['header_format']) ) ? $nectar_options['header_format'] : 'default';

?>

    <footer class="footer-new footer-rebranded">
        <div class="container">
            <div class="footer-top">
                <div class="foo-nav">
                                                            <div class="col">
                            <div class="footer-title">Features</div>
                            <ul>
                                                            <li>
                                    <a href="https://mixpanel.com/behavioral-analytics/">
                                        Behavioral Analytics                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/data-science/">
                                        Data Science                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/messaging-testing/">
                                        Messages &amp; Experiments                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/data-governance/">
                                        Data Governance                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/user-analytics-infrastructure/">
                                        User Analytics Infrastructure                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/group-analytics/">
                                        Group Analytics                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/data-pipeline/">
                                        Data Pipelines                                                                    </a>
                                </li>
                                                        </ul>
                        </div>
                                            <div class="col">
                            <div class="footer-title">Solutions</div>
                            <ul>
                                                            <li>
                                    <a href="https://mixpanel.com/solutions/saas">
                                        SaaS                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/solutions/financial-services">
                                        Financial Services                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/solutions/consumer-technology">
                                        Consumer Tech                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/solutions/media-entertainment">
                                        Media &amp; Entertainment                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/solutions/marketing/">
                                        Marketing                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/solutions/product/">
                                        Product                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/solutions/analytics-and-data-science/">
                                        Analytics                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/solutions/data-engineering/">
                                        Engineering                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/solutions/executives/">
                                        Executives                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/solutions/professional-services/">
                                        Professional Services                                                                    </a>
                                </li>
                                                        </ul>
                        </div>
                                            <div class="col">
                            <div class="footer-title">Resources</div>
                            <ul>
                                                            <li>
                                    <a href="https://mixpanel.com/blog/">
                                        Mixpanel Blog                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/customers/">
                                        Customers                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/resources/featured">
                                        Content Library                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/resources/updates/">
                                        Product Updates                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/resources/reports/">
                                        Whitepapers                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/partners/">
                                        Partners                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/trends/">
                                        Trends                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://help.mixpanel.com/">
                                        Help Center                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://help.mixpanel.com/hc/en-us/articles/115004545603-Webinar-Resource-Page">
                                        Live Webinars                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/help/reference/javascript">
                                        API &amp; Developers                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/sitemap/">
                                        Sitemap                                                                    </a>
                                </li>
                                                            <li>
                                    <a href="https://mixpanel.com/blog/2019/05/05/product-metrics-that-matter/">
                                        Product Metrics                                                                    </a>
                                </li>
                                                        </ul>
                        </div>
                                                                            <div class="col">
                                                    <div class="col-row">
                                                            <div class="footer-title">Company</div>
                                <ul>
                                                                        <li>
                                            <a href="https://mixpanel.com/about/">
                                                About Us                                                                                    </a>
                                        </li>
                                                                        <li>
                                            <a href="https://mixpanel.com/press/">
                                                Press                                                                                    </a>
                                        </li>
                                                                        <li>
                                            <a href="https://mixpanel.com/jobs/">
                                                Careers                                                                                    </a>
                                        </li>
                                                                        <li>
                                            <a href="https://mixpanel.com/legal/">
                                                Legal                                                                                    </a>
                                        </li>
                                                                        <li>
                                            <a href="#modal-contact" data-toggle="modal">
                                                Contact Sales                                                                                    </a>
                                        </li>
                                                                </ul>
                                                        </div>
                                                                            <div class="col-row">
                                <div class="footer-title">Follow</div>
                                <div class="social-links">
                                                                        <a href="https://twitter.com/mixpanel" target="_blank" class="follow-button-twitter"></a>
                                                                        <a href="https://www.facebook.com/mixpanel/" target="_blank" class="follow-button-facebook"></a>
                                                                        <a href="https://www.linkedin.com/company/mixpanel-inc-" target="_blank" class="follow-button-linkedin"></a>
                                                                </div>
                            </div>
                                                </div>
                                </div>
                            <div class="foo-post">
                    <a href="https://mixpanel.com/blog/2019/07/17/growth-kpis-metrics/">
                                            <div class="subtitle">From the blog</div>
                                                                <div class="footer-title">Identifying Growth KPIs that are leading indicators of product success</div>
                                                                <div class="img">
                            <picture>
                                        <img src="https://px6vg4ekvl21gtxs836x5jyx-wpengine.netdna-ssl.com/wp-content/uploads/2019/08/KPI-424.png" class="attachment-full" alt="Growth KPIs">        </picture>
                            </div>
                                                                <p>Learn how to identify the right metrics to measure reach, activation, engagement, and retention.</p>
                                        </a>
                </div>
                        </div>

            <div class="footer-bottom">
                            <div class="appstore-btns">
                                    <a href="https://app.appsflyer.com/id1473447589?pid=Mixpanel.com&amp;c=Footer" title="Download on the App Store" target="_blank" class="app-button iphone" style="background-image: url(https://px6vg4ekvl21gtxs836x5jyx-wpengine.netdna-ssl.com/wp-content/uploads/2017/03/download-on-appstore.svg)">
                    </a>
                                    <a href="https://app.appsflyer.com/com.mixpanel.dashboard?pid=Mixpanel.com&amp;c=Footer" title="Get it on Google Play" target="_blank" class="app-button android" style="background-image: url(https://px6vg4ekvl21gtxs836x5jyx-wpengine.netdna-ssl.com/wp-content/uploads/2017/03/download-on-google-play.png)">
                    </a>
                                </div>
                            <ul class="list">
                    <li class="copyright">© 2019 Mixpanel. All rights reserved</li>
                                    <li><a href="https://mixpanel.com/legal/terms-of-use/">Terms</a></li>
                                    <li><a href="https://mixpanel.com/legal/privacy-policy/">Privacy</a></li>
                                </ul>
            </div>
        </div>
    </footer>

<?php

nectar_hook_before_outer_wrap_close();

get_template_part( 'includes/partials/footer/off-canvas-navigation' );

?>

</div> <!--/ajax-content-wrap-->

<?php
	
	// Boxed theme option closing div.
	if ( ! empty( $nectar_options['boxed_layout'] ) && 
	'1' === $nectar_options['boxed_layout'] && 
	'left-header' !== $header_format ) {

		echo '</div><!--/boxed closing div-->'; 
	}
	
	get_template_part( 'includes/partials/footer/back-to-top' );
	get_template_part( 'includes/partials/footer/body-border' );
	
	nectar_hook_after_wp_footer();
	nectar_hook_before_body_close();
	
	wp_footer();
?>
</body>
</html>

