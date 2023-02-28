<?php

namespace App\Controllers;

class DeleteDraftPostController
{
    public function autoDeleteDraftPosts() 
    {
        $draft_posts = get_posts( array( 'post_status' => 'draft', 'posts_per_page' => -1 ) );
        foreach ( $draft_posts as $draft_post ) {
          wp_delete_post( $draft_post->ID, true );
        }
    }
    public function scheduleAutoDeleteDraftPosts() 
    {
        if ( ! wp_next_scheduled( 'auto_delete_draft_posts_hook' ) ) {
            // wp_schedule_event( strtotime( '10:00pm' ), 'daily',  array($this,'auto_delete_draft_posts_hook') );
             wp_schedule_event( time(), 'every_minute',  array($this,'auto_delete_draft_posts_hook') );
        }
    }   
}