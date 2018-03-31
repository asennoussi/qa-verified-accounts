<?php

class qa_html_theme_layer extends qa_html_theme_base
{

    function post_meta_who($post, $class) // show usernames of privileged users in italics
    {
        require_once QA_INCLUDE_DIR.'qa-app-users.php'; // for QA_USER_LEVEL_BASIC constant

        if (isset($post['raw']['opostid'])) // if item refers to an answer or comment...
            $level=@$post['raw']['olevel']; // ...take the level of answer or comment author
        else
            $level=@$post['raw']['level']; // otherwise take level of the question author

        if ($level>=QA_USER_LEVEL_EXPERT){  // if level is more than Expert user..
            $post['who']['suffix'] = '<span title="عضو خبير" class="icon-ok-circled" style="font-size: 16px;display: inline-flex;vertical-align: middle;color: #77c7f7;margin-top:3px;
"></span>';
            $post['who']['data']=@$post['who']['data']; // ...add italics

        }



        qa_html_theme_base::post_meta_who($post, $class);
    }
}