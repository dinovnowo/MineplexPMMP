<?php

declare(strict_types=1);

namespace DinoVNOwO\Base\events;

use DinoVNOwO\Base\session\Session;
use pocketmine\event\Cancellable;
use pocketmine\event\Event;

abstract class SessionEvent extends Event implements Cancellable{ /* Hmm :thonk: */

    protected $session;

    public function __construct(Session $session){
        $this->session = $session;
    }

    public function getSession() : Session{
        return $this->session;
    }
}