<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GameServerGroupName
 * @property string $GameServerGroupArn
 * @property string $GameServerId
 * @property string $InstanceId
 * @property string $ConnectionInfo
 * @property string $GameServerData
 * @property 'CLAIMED' $ClaimStatus
 * @property 'AVAILABLE'|'UTILIZED' $UtilizationStatus
 * @property \Aws\Api\DateTimeResult $RegistrationTime
 * @property \Aws\Api\DateTimeResult $LastClaimTime
 * @property \Aws\Api\DateTimeResult $LastHealthCheckTime
 */
class GameServer extends Shape
{
    /**
     * @param array{
     *     GameServerGroupName?: string,
     *     GameServerGroupArn?: string,
     *     GameServerId?: string,
     *     InstanceId?: string,
     *     ConnectionInfo?: string,
     *     GameServerData?: string,
     *     ClaimStatus?: 'CLAIMED',
     *     UtilizationStatus?: 'AVAILABLE'|'UTILIZED',
     *     RegistrationTime?: \Aws\Api\DateTimeResult,
     *     LastClaimTime?: \Aws\Api\DateTimeResult,
     *     LastHealthCheckTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
