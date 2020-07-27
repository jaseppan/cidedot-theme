@php 
    $logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $logo_id , 'full' );
    $logo = $logo[0];
@endphp
<div id="face" style="margin: auto;height: 170px; width: 170px; background: url({{ $logo }}); background-size: cover; background-position: center; margin-bottom:20px"></div>
@php dynamic_sidebar('sidebar-primary') @endphp
