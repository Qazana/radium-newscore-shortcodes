<?php
/*
 * This file is a part of the RadiumFramework core
 * and contains theme specific settings
 * Please be extremely cautious editing this file,
 *
 * Also note that most functions here can be customized/modified
 *
 * @category RadiumFramework
 * @package  Griddr WP
 * @author   Franklin M Gitonga
 * @link     http://radiumthemes.com/
 * @since 2.0.0
 */

class Radium_Shortcodes_Register {

	function  __construct() {

        /*Columns Shortcodes*/
        add_shortcode('one_third',          array(&$this, 'one_third'));
        add_shortcode('one_third_last',     array(&$this, 'one_third_last'));
        add_shortcode('two_third',          array(&$this, 'two_third'));
        add_shortcode('two_third_last',     array(&$this, 'two_third_last'));
        add_shortcode('one_half',           array(&$this, 'one_half'));
        add_shortcode('one_half_last',      array(&$this, 'one_half_last'));
        add_shortcode('one_fourth',         array(&$this, 'one_fourth'));
        add_shortcode('one_fourth_last',    array(&$this, 'one_fourth_last'));
        add_shortcode('three_fourth',       array(&$this, 'three_fourth'));
        add_shortcode('three_fourth_last',  array(&$this, 'three_fourth_last'));
        add_shortcode('one_fifth',          array(&$this, 'one_fifth'));
        add_shortcode('one_fifth_last',     array(&$this, 'one_fifth_last'));
        add_shortcode('two_fifth',          array(&$this, 'two_fifth'));
        add_shortcode('two_fifth_last',     array(&$this, 'two_fifth_last'));
        add_shortcode('three_fifth',        array(&$this, 'three_fifth'));
        add_shortcode('three_fifth_last',   array(&$this, 'three_fifth_last'));
        add_shortcode('four_fifth_last',    array(&$this, 'four_fifth_last'));
        add_shortcode('one_sixth',          array(&$this, 'one_sixth'));
        add_shortcode('four_fifth',         array(&$this, 'four_fifth'));
        add_shortcode('one_sixth_last',     array(&$this, 'one_sixth_last'));
        add_shortcode('five_sixth',         array(&$this, 'five_sixth'));
        add_shortcode('five_sixth_last',    array(&$this, 'five_sixth_last'));

		add_shortcode('highlight', 			array(&$this, 'highlight_sc'));

        add_shortcode('hr',                 array(&$this, 'hr_sc'));
        add_shortcode('hr_invisible',       array(&$this, 'hr_sc'));

        add_shortcode('clear',              array(&$this, 'clear'));
        add_shortcode('clearfix',           array(&$this, 'clear'));

		add_shortcode('icon', 				array(&$this, 'icon_sc'));
		add_shortcode('button', 			array(&$this, 'button_sc'));

		add_shortcode('social-icon', 		array(&$this, 'social_icon_sc'));

        add_shortcode('radium_image',       array(&$this, 'image_sc'));
        add_shortcode('radium_embed_video', array(&$this, 'embed_video_sc'));
        add_shortcode('list',               array(&$this, 'lists_sc'));
        add_shortcode('pre',                array(&$this, 'pre_sc'));

		if ( !has_filter( 'widget_text', 'do_shortcode') ) {
			add_filter('widget_text', 'shortcode_unautop', 10);
			add_filter('widget_text', 'do_shortcode', 10);
		}

		add_filter('the_content', 			array(&$this, 'the_content_filter'));

	}

    /*-----------------------------------------------------------------------------------*/
    /*  Column Shortcodes
    /*-----------------------------------------------------------------------------------*/
    function one_third( $atts, $content = null ) {
        return '<div class="radium-one-third">' . do_shortcode($content) . '</div>';
    }

    function one_third_last( $atts, $content = null ) {
        return '<div class="radium-one-third radium-column-last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
    }

    function two_third( $atts, $content = null ) {
        return '<div class="radium-two-third">' . do_shortcode($content) . '</div>';
    }

    function two_third_last( $atts, $content = null ) {
        return '<div class="radium-two-third radium-column-last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
    }

    function one_half( $atts, $content = null ) {
        return '<div class="radium-one-half">' . do_shortcode($content) . '</div>';
    }

    function one_half_last( $atts, $content = null ) {
        return '<div class="radium-one-half radium-column-last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
    }

    function one_fourth( $atts, $content = null ) {
       return '<div class="radium-one-fourth">' . do_shortcode($content) . '</div>';
    }

    function one_fourth_last( $atts, $content = null ) {
        return '<div class="radium-one-fourth radium-column-last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
    }

    function three_fourth( $atts, $content = null ) {
        return '<div class="radium-three-fourth">' . do_shortcode($content) . '</div>';
    }

    function three_fourth_last( $atts, $content = null ) {
        return '<div class="radium-three-fourth radium-column-last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
    }

    function one_fifth( $atts, $content = null ) {
        return '<div class="radium-one-fifth">' . do_shortcode($content) . '</div>';
    }

    function one_fifth_last( $atts, $content = null ) {
        return '<div class="radium-one-fifth radium-column-last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
    }

    function two_fifth( $atts, $content = null ) {
        return '<div class="radium-two-fifth">' . do_shortcode($content) . '</div>';
    }

    function two_fifth_last( $atts, $content = null ) {
        return '<div class="radium-two-fifth radium-column-last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
    }

    function three_fifth( $atts, $content = null ) {
        return '<div class="radium-three-fifth">' . do_shortcode($content) . '</div>';
    }

    function three_fifth_last( $atts, $content = null ) {
        return '<div class="radium-three-fifth radium-column-last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
    }

    function four_fifth( $atts, $content = null ) {
        return '<div class="radium-four-fifth">' . do_shortcode($content) . '</div>';
    }

    function four_fifth_last( $atts, $content = null ) {
        return '<div class="radium-four-fifth radium-column-last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
    }

    function one_sixth( $atts, $content = null ) {
        return '<div class="radium-one-sixth">' . do_shortcode($content) . '</div>';
    }

    function one_sixth_last( $atts, $content = null ) {
        return '<div class="radium-one-sixth radium-column-last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
    }

    function five_sixth( $atts, $content = null ) {
        return '<div class="radium-five-sixth">' . do_shortcode($content) . '</div>';
    }

    function five_sixth_last( $atts, $content = null ) {
        return '<div class="radium-five-sixth radium-column-last">' . do_shortcode($content) . '</div><div class="clearfix"></div>';
    }

    #-----------------------------------------------------------------
    // SEPARATORS
    #-----------------------------------------------------------------
    function hr_sc($atts, $content = "", $shortcodename = "") {
        extract(shortcode_atts(array(
            'link'       => '',
            'text'       => '',
        ), $atts));

        $top = $toplink = false;

        if (isset($atts[0]) && trim($atts[0]) == 'top')  $top = 'top';
        if($top == 'top') $toplink = '<a href="#top" class="skip">top</a>';

        if($shortcodename != "hr_invisible") {
            $output = '<div class="'.$shortcodename.'"></div>';

             if ($toplink) {

                $output  = '<div class="hr totop">'.$toplink.'</div>';

             } elseif ($link) {

                $output  = '<div class="hr headline solid"><a class="skip" href="'.$link.'">'.$text.'</a></div>';

             } else {

                $output  = '<div class="hr"></div>';

             }

        } else {

            $output  = '<div class="hr_invisible"></div>';

        }

        return $output;
    }

    function clear( $atts ) {
       return '<div class="clearfix"></div>';
    }

	/*-----------------------------------------------------------------------------------*/
	/* Highlight - [highlight][/highlight]
	/*-----------------------------------------------------------------------------------*/

	function highlight_sc ( $atts, $content = null ) {

		$defaults = array();

		extract( shortcode_atts( $defaults, $atts ) );

		return '<span class="highlight">' . $content . '</span>';

	}

    /*-----------------------------------------------------------------------------------*/
    /*  Icons
    /*-----------------------------------------------------------------------------------*/
    function icon_sc( $atts, $content = null ) {

        extract(shortcode_atts(array(
            'title_tag' => 'h4',
            'size' => '',           // small, medium, large (16px, 24px, 32px)
            'type' => '',           // the type of icon image to use
            'style' => 'style3',    // style1, style2, style3
            'icon' => '',   // style1, style2, style3
            'link' => '#',          // if a link is provided
            'title' => '',          // the link title attribute
            'link' => false,        // if a link is provided
            'title' => false,       // the link title attribute
            'target' => '_blank',   // the link target
            'container' => 'div',   // the container type (span, div, li, etc...)
            'return' => ''          // if you don't want the element, rather the class to be returned
        ), $atts));

        $class = null;

                // icon image
            $class .= ' '. $type;

            // if return is set to class (otherwise continue with image)
            if ($return == 'class') return $class;

            // icon
            $output = null;

            // link
            if ($link) {

                $link = trim($link);

                // target setup
                if      ($target == 'blank' || $target == '_blank' || $target == 'new' )    { $target = ' target="_blank"'; }
                elseif  ($target == 'parent')   { $target = ' target="_parent"'; }
                elseif  ($target == 'self')     { $target = ' target="_self"'; }
                elseif  ($target == 'top')      { $target = ' target="_top"'; }
                else    { $target = ''; }

            }

            $output .= '<div class="feature-wrapper effect-content '.$type.' '. $style .'">';

            $output .= '<div class="feature-icon"><span class="'.$icon.' '. $style .'"></span></div>';

            $output .= '<'.$title_tag.' class="feature-title">';

                 $output .= '<span>' .$title .'</span>';

            $output .= '</'.$title_tag.'>';

            if ( $content ) $output .= '<div class="feature-content">' . do_shortcode( $content ) .'</div>';

            $output .= '</div>';

            return $output;

    }


	#-----------------------------------------------------------------
	# Social Icons
	#-----------------------------------------------------------------

	// Single Icon
	//...............................................
	function social_icon_sc( $atts, $content = null ) {

		extract(shortcode_atts(array(
			'size' 		=> '',			// small, medium, large (16px, 24px, 32px)
			'link' 		=> '#',			// if a link is provided
			'target' 	=> '_blank',	// the link target
			'type' 		=> '',
			'style' 	=> '',
	     ), $atts));

		$icon = $class = null;

		// Icon size
		switch ($size) {
			case 'large':
				$class .= 'large';
				break;
			case 'medium':
				$class .= 'medium';
				break;
			default:
				$class .= 'small';
		}

		// set class for icon image source
		$class .= '';

		// link
		if ($link) {

			$link = trim($link);

			// target setup
			if		($target == 'blank' || $target == '_blank' || $target == 'new' )	{ $target = ' target="_blank"'; }
			elseif	($target == 'parent')	{ $target = ' target="_parent"'; }
			elseif	($target == 'self')		{ $target = ' target="_self"'; }
			elseif	($target == 'top')		{ $target = ' target="_top"'; }
			else	{ $target = ''; }

			$output = '<a href="'.$link.'" title="" '.$target.' class="'. $class  .' social-icons"><span class="social-icon ' . $type . ' '.$style.' data-type="' . $type . '"></span></a>';
		}

		return $output;

	}

	/*-----------------------------------------------------------------------------------*/
	/*	Buttons
	/*-----------------------------------------------------------------------------------*/
 	function button_sc( $atts, $content = null ) {
	    extract(shortcode_atts(array(
			'id'		=> false,
			'title'		=> false,
			'url'		=> '#',
 			'target'	=> '',
			'style'		=> '',
			'type'      => '',
			'size'      => '',
			'onclick'	=> false,
			'icon'	    => '',
	    ), $atts));

		// variable setup
		$title = ($title) ? ' title="'.$title .'"' : '';
 		$id = ($id) ? ' id="'.$id .'"' : '';

 		if ($style) $style = $style;
 		if ($type) $type = $type;
 		if ($size) $size = $size;

		$onclick = ($onclick) ? ' onclick="'.$onclick .'"' : '';

		$icon = ($icon) ? '<span class="'.$icon.'"></span>': null;

		// target setup
		if		($target == 'blank' || $target == '_blank' || $target == 'new' ) { $target = ' target="_blank"'; }
		elseif	($target == 'parent')	{ $target = ' target="_parent"'; }
		elseif	($target == 'self')		{ $target = ' target="_self"'; }
		elseif	($target == 'top')		{ $target = ' target="_top"'; }
		else	{$target = '';}

		$button = '<a' .$target. ' ' .$onclick. '  ' .$title. '  ' .$id. ' class="button ' .$style. ' '.$type.' '.$size.'" href="' .$url. '">'.$icon.'<span>' .do_shortcode($content). '</span></a>';

	    return $button;
	}

	/**
	 * Outputs Video file data in a shortcode called '[radium_audio]'.
	 *
	 * @since 2.1.3
	 *
	 * Audio Shortcode
	 * @Supports mp3, m4a, ogg, webma, wav
	 * @usage [audio href="#" hide_title="false"]
	 * @param href= link to file
	 * @param hide_title bool
	 * @return string $output Concatenated string
	 */
	function media_player_sc($atts, $title = null) {

		extract(shortcode_atts(array(
			'href' => '',
			'poster' => '',
			'height' => '',
			'title' => ''
		), $atts));

	 	$info = array( 'title' => $title );

	 	$html = null;

	 	if ( function_exists( 'get_radium_player' )) $html = get_radium_player( null,  'audio', $href, $poster, $height, $info );

		return $html;

	}

	/**
	 * Define the shortcode: [map] and its attributes
	 */
	function map_sc($atts) {
	    // Enque the stylesheet file
	    wp_enqueue_style('responsive_map_css');

	    // Enque the neccessary jquery files
	    wp_enqueue_script("jquery");
	    wp_enqueue_script('geogooglemap');
	    wp_enqueue_script('responsive_gmap');

	    // Extract the attributes user gave in the shortcode
	    $atts = shortcode_atts(array(
	      'width'		=> '', // Leave blank for 100% (responsive map), or use a width in 'px' or '%'
	      'height'	=> '500px', // Use a height in 'px' or '%'
	      'maptype' 	=> 'roadmap', // Possible values: roadmap, satellite, terrain or hybrid
	      'zoom'		=> 14, // Use values between 1-19
	      'address'	=> 'usa', // Markers addresses in this format: street, city, country | street, city, country | street, city, country
	      'description'		=> '', // Markers descriptions in this format: description1 | description2 | description3 (one for each marker address above)
	      'popup'		=> 'false', // true or false
	      'pancontrol' => 'false', // true or false
	      'zoomcontrol' => 'false', // true or false
	      'typecontrol' => 'false', // true or false
	      'scalecontrol' => 'false', // true or false
	      'streetcontrol' => 'false', // true or false
	      'center' => '', // the point where the map should be centered (latitude, longitude) for instance: center="38.980288, 22.145996"
	      'icon' => 'blue', // Possible color values: black, blue, gray, green, magenta, orange, purple, red, white, yellow
	      'style' => '2' // Use values between 1-20
	    ), $atts);

	    // Generate an unique identifier for the map
	    $mapid = rand();

	    // Extract the map type
	    $atts['maptype'] = strtoupper($atts['maptype']);

	    // If width or height were specified in the shortcode, extract them too
	    $dimensions = 'height:'.$atts['height'];

	    if($atts['width']) $dimensions .= ';width:'.$atts['width'];

	    // Get the correct icon image based on icon color given in the shortcode
	    $atts['icon'] = Radium_Shortcodes::get_url().'/assets/frontend/icons/blue.png';

	    // Set the pre-defined style which corresponds to the number given in the shortcode
	    $atts['style'] = '[ { "stylers": [ { "featureType": "all" }, { "saturation": -100 }, { "gamma": 0.50 }, {"lightness": 30 } ] } ]';

	    // Extract the langitude and longitude for the map center
	    if (trim($atts['center'])  != "") {
	        sscanf($atts['center'], '%f, %f', $lat, $long);
	    } else {
	        $lat = 'null'; $long = 'null';
	    }

	    // Split the addresses and descriptions (by | delimiter) and build markers JSON list
	    if ($atts['address'] != '')
			{
				$addresses = explode("|",$atts['address']);
				$descriptions = explode("|",$atts['description']);

				// Build a marker for each address
				$markers = '[';

	      for($i = 0;$i < count($addresses);$i ++) {
	        $address=$addresses[$i];

	        // If multiple markers, hide popup, else show popup according to parameter from shortcode
	        if (count($addresses) > 1) {
	            $atts['popup'] = "no";
	        }

	        // if it's empty, set the default description equal to the the address
	        if(isset($descriptions[$i]) && strlen(trim($descriptions[$i])) != 0) {
	            $html = $descriptions[$i];
	        }
	        else
	            $html = $address;

	        // Prepare the description html
 	        $html = str_replace(array("\n", '"', "'"), array(' ', '\"', "\'"), $html);
	        if (substr_count($html, '|') == 1) {
	          $tmp = explode('|', $html);
	          $html = '<strong>' . $tmp[0] . '</strong><br />' . $tmp[1];
	        }

	        // If more markers, add the neccessary "," delimiter between markers
	        if ($i > 0) $markers .= ",";
	        $markers .= '{
	                    address: "'. $address .'",
	                    html:"'. $html .'",
	                    popup: '. $atts['popup'] .',
	                    flat: true,
	                    icon: {
	                        image: "'. $atts['icon'] .'",
                            iconsize: [60, 60],
                            iconanchor: [12,46],
                        }
                    }';
	      }
	      $markers .= ']';
	    }
	    // Tell PHP to start output buffering
	    ob_start();
	    ?>
	    <script type="text/javascript">
	     jQuery(document).ready(function($) {
    	   $("#responsive_map_<?php echo $mapid; ?>").gMap({
                maptype: google.maps.MapTypeId.<?php echo $atts['maptype']; ?>,
                zoom: <?php echo $atts['zoom']; ?>,
                markers: <?php echo $markers; ?>,
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true,
                styles: <?php echo $atts['style']; ?>,
                scrollwheel: false,
                latitude: <?php echo $lat; ?>,
                longitude: <?php echo $long; ?>,
                onComplete: function() {}
    	   });
	    });
	  </script>
	  <div id="responsive_map_<?php echo $mapid; ?>" class="responsive-map" style="<?php echo $dimensions; ?>;"></div>
	  <?php
	  return ob_get_clean();
	}

    /**
     *  Radium Embed Video Shortcode
     *
     * @param  array $atts
     * @param  string $content
     * @return string
     *
     * @since 1.0.4
     */
    function embed_video_sc( $atts, $content = null ) {

        $title = $link = $size = $full_width = $classes = $output = $video_h = null;

        extract(shortcode_atts(array(
            'title'     => '',
            'link'      => '',
            'size'      => ( isset($content_width) ) ? $content_width : 500,
            'fullwidth' => true,
            'lightbox'  => false,
            'thumbnail' => '',
        ), $atts));

        if ( $link == '' ) return null;

        $remote_video_url = $link;

        if ( strpos($remote_video_url, 'youtu') > 0 ) {

            if (preg_match('%(?:youtube\.com/(?:user/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $remote_video_url, $result))
                $video_id = $result[1];

            if( isset( $video_id ) )
                $image = Radium_Shortcodes_Functions::get_youtube_video_image($video_id);

        } elseif (strpos($remote_video_url, 'vimeo') > 0) {

            sscanf(parse_url($remote_video_url, PHP_URL_PATH), '/%d', $video_id);

            if( isset( $video_id ) )
                $image = Radium_Shortcodes_Functions::get_vimeo_video_image($video_id);

        } elseif ( $thumbnail ) {

            $image = $thumbnail;

        }

        $size = str_replace(array( 'px', ' ' ), array( '', '' ), $size);

        $size = explode("x", $size);

        $video_w = $size[0];

        if ( count($size) > 1 )
            $video_h = ' height="'.$size[1].'"';

        global $wp_embed;

        $embed = $wp_embed->run_shortcode('[embed width="'.$video_w.'"'.$video_h.']'.$link.'[/embed]');

        if ($full_width == "yes" || $full_width == "true")
                $classes .= "\n\t".'fullwidth';

        $output .= "\n\t".'<div class="radium_embed_video '.$classes.'">';

        $output .= $title ? "\n\t\t\t".'<h4 class="radium_embed_video_heading"><span>'.$title.'</span></h4>' : '';

        if ( $lightbox === "yes" || $lightbox == "true") {

            $output .= '<a href="'.$remote_video_url.'" rel="lightbox" title="'.$title.'"><img src="'.$image.'" alt="'.$title.'"/></a>';

        } else {

            $output .= $embed;

        }

        $output .= "\n\t".'</div>';

        return $output;
    }

    /**
     *  Radium Lists Shortcode
     *
     * @param  array $atts
     * @param  string $content
     * @return string
     *
     * @since 1.0.4
     */
    function lists_sc($atts, $content = null) {
        extract( shortcode_atts( array(
            'icon' => 'icon-forward',
            'style' => ''
        ), $atts ) );

         $content = do_shortcode($content);

         $content = str_replace('<li>', '<li><span class="'.$icon.'"></span>', $content);

        return '<div class="list '.$style.'">'.$content.'</div>';
    }

    /**
     *  Radium PrettyPrint Shortcode
     *
     * @param  array $atts
     * @param  string $content
     * @return string
     *
     * @since 1.0.4
     */
    function pre_sc ( $atts, $content = null ) {
        $defaults = array();
        extract( shortcode_atts( $defaults, $atts ) );
        return '<pre class="prettyprint">' . $content . '</pre>';
    }

    /**
     * Strip Spaces and p tags from shortcodes
     * @param  string $content Wordpress Content
     * @return string
     *
     * @since 1.0.0
     */
	function the_content_filter($content) {

		// array of custom shortcodes requiring the fix
		$block = join("|",array(

            /* Columns */
            'one_third',
            'one_third_last',
            'two_third',
            'two_third_last',
            'one_half',
            'one_half_last',
            'one_fourth',
            'one_fourth_last',
            'three_fourth',
            'three_fourth_last',
            'one_fifth',
            'one_fifth_last',
            'two_fifth',
            'two_fifth_last',
            'three_fifth',
            'three_fifth_last',
            'four_fifth_last',
            'one_sixth',
            'four_fifth',
            'one_sixth_last',
            'five_sixth',
            'five_sixth_last',
            /* end Columns */

		 	'button',
	   	 	'social-icon',
            'radium_image',
            'radium_embed_video',
            'list',
            'pre',

            'hr',
            'hr_invisible',
            'clear',
            'clearfix',

		));

		// opening tag
		$rep = preg_replace("/(<p>)?\[($block)(\s[^\]]+)?\](<\/p>|<br \/>)?/","[$2$3]",$content);

		// closing tag
		$rep = preg_replace("/(<p>)?\[\/($block)](<\/p>|<br \/>)?/","[/$2]",$rep);

		return $rep;

	}

}
?>
