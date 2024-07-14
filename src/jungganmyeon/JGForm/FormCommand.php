<?php

namespace jungganmyeon\JGForm;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class FormCommand extends Command {
    private Main $plugin;
    private string $permission;
    private string $type;

    public function __construct(Main $plugin, string $name, string $description, string $permission, string $type) {
        parent::__construct($name, $description);
        $this->setPermission($permission);
        $this->plugin = $plugin;
        $this->permission = $permission;
        $this->type = $type;
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args) {
        if (!$sender->hasPermission($this->permission)) {
            $sender->sendMessage("You do not have permission to use this command.");
            return;
        }

        if ($sender instanceof Player) {
        $this->plugin->getFormHandler()->sendForm($sender, $this->getName());
        return;
    }

        $sender->sendMessage("This command can only be executed in-game.");
    }
}

