<?php

namespace App;
use \App\Controllers\DeleteDraftPostController;

class Router
{
    public $delete_draft_post_controller ;

    public function __construct()
    {
        $this->delete_draft_post_controller =new DeleteDraftPostController();
        add_action( 'wp', array($this->delete_draft_post_controller,'scheduleAutoDeleteDraftPosts') );
        add_action( 'auto_delete_draft_posts_hook', array($this->delete_draft_post_controller,'autoDeleteDraftPosts') );
    }
}    