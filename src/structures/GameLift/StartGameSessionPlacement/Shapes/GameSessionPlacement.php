<?php

namespace Sunaoka\Aws\Structures\GameLift\StartGameSessionPlacement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlacementId
 * @property string $GameSessionQueueName
 * @property 'PENDING'|'FULFILLED'|'CANCELLED'|'TIMED_OUT'|'FAILED' $Status
 * @property list<GameProperty> $GameProperties
 * @property int<0, max> $MaximumPlayerSessionCount
 * @property string $GameSessionName
 * @property string $GameSessionId
 * @property string $GameSessionArn
 * @property string $GameSessionRegion
 * @property list<PlayerLatency> $PlayerLatencies
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $IpAddress
 * @property string $DnsName
 * @property int<1, 60000> $Port
 * @property list<PlacedPlayerSession> $PlacedPlayerSessions
 * @property string $GameSessionData
 * @property string $MatchmakerData
 * @property PriorityConfigurationOverride $PriorityConfigurationOverride
 */
class GameSessionPlacement extends Shape
{
    /**
     * @param array{
     *     PlacementId?: string,
     *     GameSessionQueueName?: string,
     *     Status?: 'PENDING'|'FULFILLED'|'CANCELLED'|'TIMED_OUT'|'FAILED',
     *     GameProperties?: list<GameProperty>,
     *     MaximumPlayerSessionCount?: int<0, max>,
     *     GameSessionName?: string,
     *     GameSessionId?: string,
     *     GameSessionArn?: string,
     *     GameSessionRegion?: string,
     *     PlayerLatencies?: list<PlayerLatency>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     IpAddress?: string,
     *     DnsName?: string,
     *     Port?: int<1, 60000>,
     *     PlacedPlayerSessions?: list<PlacedPlayerSession>,
     *     GameSessionData?: string,
     *     MatchmakerData?: string,
     *     PriorityConfigurationOverride?: PriorityConfigurationOverride
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
