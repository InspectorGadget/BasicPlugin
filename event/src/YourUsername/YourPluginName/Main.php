<?php // Identifier for the Server to know (PHP)

namespace YourUsername\YourPluginName; // Only then 'plugin.yml' can identify which file to load on startup

use pocketmine\plugin\PluginBase; // This is the Plugin Base where it will be extended
use pocketmine\event\{ Listener, player\PlayerJoinEvent }; // Define the file, along with our Example: PlayerJoinEvent

class Main extends PluginBase implements Listener {

    /** MUST HAVE */
    public function onEnable(): void {
        $this->getServer()->getPluginManager()->registerEvents($this, $this); // Important for the plugin to register itself before making collecting Data from the Event Handlers
        $this->getLogger()->info("I'm up!");
        // Do other stuffs here
    }

    /** FOR EVENT */
    public function onJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        $username = $player->getName();
        $player->sendMessage("Hi player named: " . $username . "!");
    }

    /** MUST HAVE */
    public function onDisable(): void {
        $this->getLogger()->info("Shutting down!");
    }

}