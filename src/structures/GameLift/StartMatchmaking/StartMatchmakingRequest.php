<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchmaking;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TicketId
 * @property string $ConfigurationName
 * @property list<Shapes\Player> $Players
 */
class StartMatchmakingRequest extends Request
{
    /**
     * @param array{
     *     TicketId?: string|null,
     *     ConfigurationName: string,
     *     Players: list<Shapes\Player>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
