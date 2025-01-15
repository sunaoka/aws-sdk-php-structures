<?php

namespace Sunaoka\Aws\Structures\GameLift\StartGameSessionPlacement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlacementId
 * @property string|null $GameSessionQueueName
 * @property 'PENDING'|'FULFILLED'|'CANCELLED'|'TIMED_OUT'|'FAILED'|null $Status
 * @property list<GameProperty>|null $GameProperties
 * @property int<0, max>|null $MaximumPlayerSessionCount
 * @property string|null $GameSessionName
 * @property string|null $GameSessionId
 * @property string|null $GameSessionArn
 * @property string|null $GameSessionRegion
 * @property list<PlayerLatency>|null $PlayerLatencies
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $IpAddress
 * @property string|null $DnsName
 * @property int<1, 60000>|null $Port
 * @property list<PlacedPlayerSession>|null $PlacedPlayerSessions
 * @property string|null $GameSessionData
 * @property string|null $MatchmakerData
 * @property PriorityConfigurationOverride|null $PriorityConfigurationOverride
 */
class GameSessionPlacement extends Shape
{
    /**
     * @param array{
     *     PlacementId?: string|null,
     *     GameSessionQueueName?: string|null,
     *     Status?: 'PENDING'|'FULFILLED'|'CANCELLED'|'TIMED_OUT'|'FAILED'|null,
     *     GameProperties?: list<GameProperty>|null,
     *     MaximumPlayerSessionCount?: int<0, max>|null,
     *     GameSessionName?: string|null,
     *     GameSessionId?: string|null,
     *     GameSessionArn?: string|null,
     *     GameSessionRegion?: string|null,
     *     PlayerLatencies?: list<PlayerLatency>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     IpAddress?: string|null,
     *     DnsName?: string|null,
     *     Port?: int<1, 60000>|null,
     *     PlacedPlayerSessions?: list<PlacedPlayerSession>|null,
     *     GameSessionData?: string|null,
     *     MatchmakerData?: string|null,
     *     PriorityConfigurationOverride?: PriorityConfigurationOverride|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
