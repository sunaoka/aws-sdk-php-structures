<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribePlayerSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PlayerSessionId
 * @property string|null $PlayerId
 * @property string|null $GameSessionId
 * @property string|null $FleetId
 * @property string|null $FleetArn
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $TerminationTime
 * @property 'RESERVED'|'ACTIVE'|'COMPLETED'|'TIMEDOUT'|null $Status
 * @property string|null $IpAddress
 * @property string|null $DnsName
 * @property int<1, 60000>|null $Port
 * @property string|null $PlayerData
 */
class PlayerSession extends Shape
{
    /**
     * @param array{
     *     PlayerSessionId?: string|null,
     *     PlayerId?: string|null,
     *     GameSessionId?: string|null,
     *     FleetId?: string|null,
     *     FleetArn?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     TerminationTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'RESERVED'|'ACTIVE'|'COMPLETED'|'TIMEDOUT'|null,
     *     IpAddress?: string|null,
     *     DnsName?: string|null,
     *     Port?: int<1, 60000>|null,
     *     PlayerData?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
