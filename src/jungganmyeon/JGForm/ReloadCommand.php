<?php

namespace jungganmyeon\JGForm;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class ReloadCommand extends Command {
    private Main $plugin;

    public function __construct(Main $plugin) {
        $this->plugin = $plugin;
        parent::__construct("jgreload", "Reload JGForm");
        $this->setPermission("jgform.command.reload");
    }

    public function execute(CommandSender $sender, string $label, array $args) {
        $this->plugin->getFormHandler()->loadForms();
        $sender->sendMessage("Update menu done! Total menu loaded: " . count($this->plugin->getFormHandler()->getForms()));
    }
}
