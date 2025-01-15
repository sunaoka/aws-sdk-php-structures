<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchBackfill;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $TicketId
 * @property string $ConfigurationName
 * @property string|null $GameSessionArn
 * @property list<Shapes\Player> $Players
 */
class StartMatchBackfillRequest extends Request
{
    /**
     * @param array{
     *     TicketId?: string|null,
     *     ConfigurationName: string,
     *     GameSessionArn?: string|null,
     *     Players: list<Shapes\Player>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
