<?php

namespace Sunaoka\Aws\Structures\GameLift\CreateGameSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GameSessionId
 * @property string $Name
 * @property string $FleetId
 * @property string $FleetArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $TerminationTime
 * @property int $CurrentPlayerSessionCount
 * @property int $MaximumPlayerSessionCount
 * @property 'ACTIVE'|'ACTIVATING'|'TERMINATED'|'TERMINATING'|'ERROR' $Status
 * @property 'INTERRUPTED'|'TRIGGERED_ON_PROCESS_TERMINATE'|'FORCE_TERMINATED' $StatusReason
 * @property list<GameProperty> $GameProperties
 * @property string $IpAddress
 * @property string $DnsName
 * @property int $Port
 * @property 'ACCEPT_ALL'|'DENY_ALL' $PlayerSessionCreationPolicy
 * @property string $CreatorId
 * @property string $GameSessionData
 * @property string $MatchmakerData
 * @property string $Location
 */
class GameSession extends Shape
{
    /**
     * @param array{
     *     GameSessionId?: string,
     *     Name?: string,
     *     FleetId?: string,
     *     FleetArn?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     TerminationTime?: \Aws\Api\DateTimeResult,
     *     CurrentPlayerSessionCount?: int,
     *     MaximumPlayerSessionCount?: int,
     *     Status?: 'ACTIVE'|'ACTIVATING'|'TERMINATED'|'TERMINATING'|'ERROR',
     *     StatusReason?: 'INTERRUPTED'|'TRIGGERED_ON_PROCESS_TERMINATE'|'FORCE_TERMINATED',
     *     GameProperties?: list<GameProperty>,
     *     IpAddress?: string,
     *     DnsName?: string,
     *     Port?: int,
     *     PlayerSessionCreationPolicy?: 'ACCEPT_ALL'|'DENY_ALL',
     *     CreatorId?: string,
     *     GameSessionData?: string,
     *     MatchmakerData?: string,
     *     Location?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
