<?php
// Silence is golden.

if ( is_home() ) {
do_action( 'homepage' );
} else {
get_template_part( 'loop' );
}

