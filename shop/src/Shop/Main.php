<?php

namespace Shop;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Server;

class Main extends PluginBase implements Listener{

    public static $instance;

    function onEnable()
    {
        Server::getInstance()->getCommandMap()->registerAll("shop", [
            new \Shop\Commands\ShopCommands
        ]);
        self::$instance = $this;
        Server::getInstance()->getPluginManager()->registerEvents(new \Shop\Listener\EventListener(self::$instance), self::$instance);
        $this->info();
    }

    function info(){
    Server::getInstance()->getLogger()->notice('
    
    Plugin by talk.24serv.pro
    author: WHOIM
    ');
    }

    /**
     * @param getInstance
     **/

    public static function getInstance(){
        return self::$instance;
    }
}