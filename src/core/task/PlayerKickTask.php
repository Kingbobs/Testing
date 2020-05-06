<?php

namespace core\task;

use pocketmine\Player;
use pocketmine\scheduler\Task;

class PlayerKickTask extends Task
{

    /** @var null|Player  */
    private $player;

    public function __construct(Player $player)
    {
        $this->player = $player;
    }

    /**
     * @inheritDoc
     */
    public function onRun(int $currentTick)
    {
        if($this->player !== null and $this->player->isOnline()) {
            $this->player->close("", "Server is full");
        }
    }
}