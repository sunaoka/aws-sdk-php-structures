<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GameServerGroupName
 * @property string|null $GameServerGroupArn
 * @property string|null $GameServerId
 * @property string|null $InstanceId
 * @property string|null $ConnectionInfo
 * @property string|null $GameServerData
 * @property 'CLAIMED'|null $ClaimStatus
 * @property 'AVAILABLE'|'UTILIZED'|null $UtilizationStatus
 * @property \Aws\Api\DateTimeResult|null $RegistrationTime
 * @property \Aws\Api\DateTimeResult|null $LastClaimTime
 * @property \Aws\Api\DateTimeResult|null $LastHealthCheckTime
 */
class GameServer extends Shape
{
    /**
     * @param array{
     *     GameServerGroupName?: string|null,
     *     GameServerGroupArn?: string|null,
     *     GameServerId?: string|null,
     *     InstanceId?: string|null,
     *     ConnectionInfo?: string|null,
     *     GameServerData?: string|null,
     *     ClaimStatus?: 'CLAIMED'|null,
     *     UtilizationStatus?: 'AVAILABLE'|'UTILIZED'|null,
     *     RegistrationTime?: \Aws\Api\DateTimeResult|null,
     *     LastClaimTime?: \Aws\Api\DateTimeResult|null,
     *     LastHealthCheckTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
