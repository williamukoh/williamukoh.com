import Darkmode from 'darkmode-js';

const ready = (fn) => {
    if (document.readyState != 'loading') {
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
}

ready( function() {

    new Darkmode({
        label: '🌓',
        bottom: '40px', // default: '32px'
        right: '20px', // default: '32px'
    }).showWidget();

    const _menu = document.querySelector('a.menu-trigger'),
          _rootElem = document.documentElement,
          triggerEvent = ( $evt, $el ) => {
                            if ( $el ) {
                                var event = document.createEvent('HTMLEvents');
                                event.initEvent( $evt , true, false);
                                $el.dispatchEvent(event);
                            }            
                        }

    

    if ( _menu ) {
        
        _menu.addEventListener( 'click', function($e) {
            _rootElem.classList.toggle( 'menu-open' );
            $e.preventDefault();
            $e.stopPropagation();
        }, false );

        document.querySelector('.page-wrapper').addEventListener( 'click', function($e) {
            if ( _rootElem.classList.contains( 'menu-open' ) ) {
                triggerEvent( 'click', _menu );
                //$e.preventDefault();
            }
            
        }, false);
    }

    
    
})