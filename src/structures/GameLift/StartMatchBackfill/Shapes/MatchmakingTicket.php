<?php

namespace Sunaoka\Aws\Structures\GameLift\StartMatchBackfill\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TicketId
 * @property string $ConfigurationName
 * @property string $ConfigurationArn
 * @property 'CANCELLED'|'COMPLETED'|'FAILED'|'PLACING'|'QUEUED'|'REQUIRES_ACCEPTANCE'|'SEARCHING'|'TIMED_OUT' $Status
 * @property string $StatusReason
 * @property string $StatusMessage
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property list<Player> $Players
 * @property GameSessionConnectionInfo $GameSessionConnectionInfo
 * @property int<0, max> $EstimatedWaitTime
 */
class MatchmakingTicket extends Shape
{
    /**
     * @param array{
     *     TicketId?: string,
     *     ConfigurationName?: string,
     *     ConfigurationArn?: string,
     *     Status?: 'CANCELLED'|'COMPLETED'|'FAILED'|'PLACING'|'QUEUED'|'REQUIRES_ACCEPTANCE'|'SEARCHING'|'TIMED_OUT',
     *     StatusReason?: string,
     *     StatusMessage?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Players?: list<Player>,
     *     GameSessionConnectionInfo?: GameSessionConnectionInfo,
     *     EstimatedWaitTime?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
