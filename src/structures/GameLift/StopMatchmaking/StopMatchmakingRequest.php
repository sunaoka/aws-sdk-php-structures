<?php

namespace Sunaoka\Aws\Structures\GameLift\StopMatchmaking;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TicketId
 */
class StopMatchmakingRequest extends Request
{
    /**
     * @param array{TicketId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
