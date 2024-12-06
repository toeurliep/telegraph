<?php

namespace App\Telegram;
use DefStudio\Telegraph\Handlers\WebhookHandler as Handlers;
class WebhookHandler extends Handlers{
    public function start():void{
        $this->reply('HEllo world!');
    }
    public function help():void{
        $this->reply('Help!');
    }

}