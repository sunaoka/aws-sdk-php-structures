<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchBackfill\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TicketId
 * @property string|null $ConfigurationName
 * @property string|null $ConfigurationArn
 * @property 'CANCELLED'|'COMPLETED'|'FAILED'|'PLACING'|'QUEUED'|'REQUIRES_ACCEPTANCE'|'SEARCHING'|'TIMED_OUT'|null $Status
 * @property string|null $StatusReason
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property list<Player>|null $Players
 * @property GameSessionConnectionInfo|null $GameSessionConnectionInfo
 * @property int<0, max>|null $EstimatedWaitTime
 */
class MatchmakingTicket extends Shape
{
    /**
     * @param array{
     *     TicketId?: string|null,
     *     ConfigurationName?: string|null,
     *     ConfigurationArn?: string|null,
     *     Status?: 'CANCELLED'|'COMPLETED'|'FAILED'|'PLACING'|'QUEUED'|'REQUIRES_ACCEPTANCE'|'SEARCHING'|'TIMED_OUT'|null,
     *     StatusReason?: string|null,
     *     StatusMessage?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Players?: list<Player>|null,
     *     GameSessionConnectionInfo?: GameSessionConnectionInfo|null,
     *     EstimatedWaitTime?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
