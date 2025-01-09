<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribePlayerSessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PlayerSessionId
 * @property string $PlayerId
 * @property string $GameSessionId
 * @property string $FleetId
 * @property string $FleetArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $TerminationTime
 * @property 'RESERVED'|'ACTIVE'|'COMPLETED'|'TIMEDOUT' $Status
 * @property string $IpAddress
 * @property string $DnsName
 * @property int<1, 60000> $Port
 * @property string $PlayerData
 */
class PlayerSession extends Shape
{
    /**
     * @param array{
     *     PlayerSessionId?: string,
     *     PlayerId?: string,
     *     GameSessionId?: string,
     *     FleetId?: string,
     *     FleetArn?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     TerminationTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'RESERVED'|'ACTIVE'|'COMPLETED'|'TIMEDOUT',
     *     IpAddress?: string,
     *     DnsName?: string,
     *     Port?: int<1, 60000>,
     *     PlayerData?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
