<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchBackfill;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TicketId
 * @property string $ConfigurationName
 * @property string $GameSessionArn
 * @property list<Shapes\Player> $Players
 */
class StartMatchBackfillRequest extends Request
{
    /**
     * @param array{
     *     TicketId?: string,
     *     ConfigurationName: string,
     *     GameSessionArn?: string,
     *     Players: list<Shapes\Player>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
