function showSocialButtons() {

    var html =
                '<div id="social-buttons" class="fadeable fade">'
            + '<div class="fb-like" data-href="http://urbanAsk.com" data-layout="box_count" data-width="50" ></div>'
            + '<div class="g-plusone-frame"><div class="g-plusone" data-size="tall" data-href="http://urbanAsk.com"></div></div>'
            + '<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://urbanAsk.com" data-text="urbanAsk - The addicting game of helping people find things." data-count="vertical">Tweet</a>'
            + '<div id="fb-root"></div>'
            + '</div>';
    document.getElementById( 'viewport' ).insertAdjacentHTML( 'beforeEnd', html );

    var script = document.createElement( 'script' );
    script.async = true;
    script.src = document.location.protocol + '//connect.facebook.net/en_US/all.js#xfbml=1&appId=267603823260704';
    document.getElementById( 'fb-root' ).appendChild( script );

    script = document.createElement( 'script' );
    script.async = true;
    script.src = document.location.protocol + '//platform.twitter.com/widgets.js';
    document.getElementById( 'social-buttons' ).appendChild( script );

    script = document.createElement( 'script' );
    script.async = true;
    script.src = document.location.protocol + '//apis.google.com/js/plusone.js';
    document.getElementById( 'social-buttons' ).appendChild( script );

    window.setTimeout( function () {

        document.getElementById( 'social-buttons' ).removeAttribute( 'class' );

    }, 4000 );

};

showSocialButtons();