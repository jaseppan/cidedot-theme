<header class="banner">

    <nav class="navbar navbar-inverse navbar-static-top">
      <div id="site-identity" class="bg-dark text-center">
        <a class="navbar-brand text-light" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
        <span class="divider"></span>
        <br /><span class="text-light">Web developer</span>
        <div class="navbar-header">
          <div id="navbar-toggler" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-label="Toggle navigation" role="button">
            <div class="animated-icon"><span></span><span></span><span></span></div>
          </div>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="navbar-collapse"> 
          
          @if (has_nav_menu('primary_navigation'))
            {!! 
              wp_nav_menu( array(
              'menu' => 'top_menu',
              'depth' => 2,
              'container' => false,
              'menu_class' => 'nav navbar-nav',
              //Process nav menu using our custom nav walker
              'walker' => new wp_bootstrap_navwalker())
            );
            !!}
          @endif
  
        </div>
      </div>
    </nav>
    <!-- Collect the nav links, forms, and other content for toggling -->

</header>
