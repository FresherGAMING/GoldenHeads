<?php

namespace FresherGAMING\GoldenHeads;

use pocketmine\plugin\PluginBase;

use customiesdevs\customies\block\CustomiesBlockFactory;

class GoldenHeads extends PluginBase {
  
  public function onEnable() : void {
    CustomiesBlockFactory::getInstance()->registerBlock(
      static fn(int $id) => 
        new Block(
          new BlockIdentifier($id, 0),
          "Golden Heads",
          new BlockBreakInfo(1)
        ),
        "minecraft:golden_heads
    );
  }

}
