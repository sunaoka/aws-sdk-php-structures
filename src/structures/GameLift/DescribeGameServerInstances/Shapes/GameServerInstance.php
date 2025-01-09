<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameServerInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GameServerGroupName
 * @property string $GameServerGroupArn
 * @property string $InstanceId
 * @property 'ACTIVE'|'DRAINING'|'SPOT_TERMINATING' $InstanceStatus
 */
class GameServerInstance extends Shape
{
    /**
     * @param array{
     *     GameServerGroupName?: string,
     *     GameServerGroupArn?: string,
     *     InstanceId?: string,
     *     InstanceStatus?: 'ACTIVE'|'DRAINING'|'SPOT_TERMINATING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
