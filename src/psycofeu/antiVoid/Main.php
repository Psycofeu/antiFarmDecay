<?php

namespace psycofeu\antiVoid;

use pocketmine\event\entity\EntityTrampleFarmlandEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    protected function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->notice("Plugin enable");
    }
    public function onFarmDecay(EntityTrampleFarmlandEvent $event)
    {
        $event->cancel();
    }
}