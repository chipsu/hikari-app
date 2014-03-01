<?php

namespace app\controller;

use hikari\controller\Controller;

class Index extends Controller {

    function index() {
        $this->load('HelperClass', [], ['name' => 'helper_alias', 'register' =>  true]);
        $client = new \MongoClient();
        $db = $client->default;
        $posts = $db->posts;
        $posts->remove([
            'date' => ['$lt' => new \MongoDate(strtotime('NOW - 5 SECONDS'))],
        ]);
        $posts->insert([
            'date' => new \MongoDate(),
            'content' => 'Hello World',
        ]);
        return ['title' => 'The Title', 'message' => $this->helper_alias->message(), 'posts' => $posts->find()];
    }

    function html() {
        $this->load('html');
        echo $this->html->open('pre');
        echo $this->html->tag('p', [], 'Hello!');
        echo $this->html->close('pre');
    }

    function args($a, $b, $c = 'default') {
        var_dump(func_get_args());
    }
}
