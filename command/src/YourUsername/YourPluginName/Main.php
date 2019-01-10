<?php // Identifier for the Server to know (PHP)

namespace YourUsername\YourPluginName; // Only then 'plugin.yml' can identify which file to load on startup

use pocketmine\plugin\PluginBase; // This is the Plugin Base where it will be extended
use pocketmine\command\{ CommandSender, Command }; // CommandSender fires up when you are executing a Command, Command fires up as a general Command Handler
use pocketmine\utils\TextFormat as TF; // This allows us to use colour with an alias of TF;

class Main extends PluginBase {

    /** MUST HAVE */
    public function onEnable(): void {
        $this->getLogger()->info("I'm up!");
        // Do other stuffs here
    }

    /** FOR COMMAND */
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch(strtolower($command->getName())) {
            case "hello": // Make sure it's defined in 'plugin.yml'
                if (!$sender->hasPermission("basicplugin.command") || !$sender->isOp()) { // '!' means (not) : false : Make sure to define in 'plugin.yml'
                    $sender->sendMessage(TF::RED . "You have no permission to use this command!");
                    return true; // This will cancel the execution of other code below this.
                }

                $sender->sendMessage("Hello World!");
            break;
        }
    }

    /** MUST HAVE */
    public function onDisable(): void {
        $this->getLogger()->info("Shutting down!");
    }

}