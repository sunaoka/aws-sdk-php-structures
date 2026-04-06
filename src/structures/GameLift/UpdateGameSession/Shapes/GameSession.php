<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GameSessionId
 * @property string|null $Name
 * @property string|null $FleetId
 * @property string|null $FleetArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $TerminationTime
 * @property int<0, max>|null $CurrentPlayerSessionCount
 * @property int<0, max>|null $MaximumPlayerSessionCount
 * @property 'ACTIVE'|'ACTIVATING'|'TERMINATED'|'TERMINATING'|'ERROR'|null $Status
 * @property 'INTERRUPTED'|'TRIGGERED_ON_PROCESS_TERMINATE'|'FORCE_TERMINATED'|null $StatusReason
 * @property list<GameProperty>|null $GameProperties
 * @property string|null $IpAddress
 * @property string|null $DnsName
 * @property int<1, 60000>|null $Port
 * @property 'ACCEPT_ALL'|'DENY_ALL'|null $PlayerSessionCreationPolicy
 * @property string|null $CreatorId
 * @property string|null $GameSessionData
 * @property string|null $MatchmakerData
 * @property string|null $Location
 */
class GameSession extends Shape
{
    /**
     * @param array{
     *     GameSessionId?: string|null,
     *     Name?: string|null,
     *     FleetId?: string|null,
     *     FleetArn?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     TerminationTime?: \Aws\Api\DateTimeResult|null,
     *     CurrentPlayerSessionCount?: int<0, max>|null,
     *     MaximumPlayerSessionCount?: int<0, max>|null,
     *     Status?: 'ACTIVE'|'ACTIVATING'|'TERMINATED'|'TERMINATING'|'ERROR'|null,
     *     StatusReason?: 'INTERRUPTED'|'TRIGGERED_ON_PROCESS_TERMINATE'|'FORCE_TERMINATED'|null,
     *     GameProperties?: list<GameProperty>|null,
     *     IpAddress?: string|null,
     *     DnsName?: string|null,
     *     Port?: int<1, 60000>|null,
     *     PlayerSessionCreationPolicy?: 'ACCEPT_ALL'|'DENY_ALL'|null,
     *     CreatorId?: string|null,
     *     GameSessionData?: string|null,
     *     MatchmakerData?: string|null,
     *     Location?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
