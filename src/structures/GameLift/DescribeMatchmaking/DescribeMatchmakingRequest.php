<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeMatchmaking;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TicketIds
 */
class DescribeMatchmakingRequest extends Request
{
    /**
     * @param array{TicketIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
