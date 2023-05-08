<?php

declare(strict_types=1);

namespace Shop;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;

class Main extends PluginBase implements Listener{

    /** @var getInstance() */
    public static $instance;

    public function onEnable() : Void
    {
        Server::getInstance()->getCommandMap()->registerAll("shop", [
            new \Shop\Commands\ShopCommands
        ]);
        self::$instance = $this;
        Server::getInstance()->getPluginManager()->registerEvents(new \Shop\Listener\EventListener(self::$instance), self::$instance);
        $this->info();
    }

    public function info(){
    Server::getInstance()->getLogger()->notice('
    
    Plugin for talk.24serv.pro
    author: OneWearf4k
    ');
    }

    /**
     * @return instance
     **/

    public static function getInstance() : Main{
        return self::$instance;
    }
}