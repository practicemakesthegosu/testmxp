window.onload = function () {

    mxpMenuAnchors = "#header-outer .col.span_9.col_last a";

    jQuery("#header-outer .col.span_9.col_last").on('mouseenter',function () {
        jQuery(mxpMenuAnchors).css({
            'opacity':'0.5',
            'transition-duration': '0.3s'
        });
    });

    jQuery("#header-outer .col.span_9.col_last").on('mouseleave',function () {
        jQuery(mxpMenuAnchors).css({
            'opacity':'1',
            'transition-duration': '0.3s'
        });
    });


    mpxSubMenuAnchors = "ul.sf-menu.sf-js-enabled.sf-arrows a";

    jQuery(mpxSubMenuAnchors).on('mouseenter',function (){
        jQuery(this).addClass('hover') 
        if(jQuery(this).hasClass('hover')){
            jQuery(this).css('opacity','1');
        }
    });
    
    jQuery(mpxSubMenuAnchors).on('mouseleave',function (){
        jQuery(this).removeClass('hover') 
        if(!jQuery(this).hasClass('hover')){
            jQuery(this).css('opacity','0.5');
        }
    });

    mpxSubMenuAnchorsRight = "ul.buttons.sf-menu a";

    jQuery(mpxSubMenuAnchorsRight).on('mouseenter',function (){
        jQuery(this).addClass('hover') 
        if(jQuery(this).hasClass('hover')){
            jQuery(this).css('opacity','1');
        }
    });
    
    jQuery(mpxSubMenuAnchorsRight).on('mouseleave',function (){
        jQuery(this).removeClass('hover') 
        if(!jQuery(this).hasClass('hover')){
            jQuery(this).css('opacity','0.5');
        }
    });
};