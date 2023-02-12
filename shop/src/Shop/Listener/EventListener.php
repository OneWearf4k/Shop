<?php

namespace Shop\Listener;

use ChestAPI\ChestAPI;
use Shop\Main;

class EventListener implements \pocketmine\event\Listener{

    public function handleChestClick(\ChestAPI\ChestClickEvent $e){
        $e->setCancelled();
        switch($e->getCustomName()){
            case 'Предмет':
                // todo
            break;
        }
    }
}
