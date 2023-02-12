<?php

namespace Shop\Commands;

use pocketmine\command\{Command, CommandSender};
use pocketmine\item\{Item, ItemIds};

use ChestAPI\ChestAPI;

class ShopCommands extends Command{
    public function __construct(){
        parent::__construct('shop');
    }
    public function execute(CommandSender $s, $label, array $args){
        switch($args[0]){
            case 'menu':
                $chest = ChestAPI::getInstance()->openChest($s, [
                    1 => Item::get(1, 0, 1)->setCustomName("Предмет"),
                ], '§rМагазин', ChestAPI::DOUBLE_CHEST);
                if(is_bool($chest)) return;
                break;
        }
    }
}