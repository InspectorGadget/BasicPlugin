<?php // Identifier for the Server to know (PHP)

namespace YourUsername\YourPluginName; // Only then 'plugin.yml' can identify which file to load on startup

use pocketmine\plugin\PluginBase; // This is the Plugin Base where it will be extended

class Main extends PluginBase {

    /** MUST HAVE */
    public function onEnable(): void {
        $this->getLogger()->info("I'm up!");
        // Do other stuffs here
    }

    /** MUST HAVE */
    public function onDisable(): void {
        $this->getLogger()->info("Shutting down!");
    }

}