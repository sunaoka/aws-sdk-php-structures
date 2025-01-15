<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameServerInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GameServerGroupName
 * @property string|null $GameServerGroupArn
 * @property string|null $InstanceId
 * @property 'ACTIVE'|'DRAINING'|'SPOT_TERMINATING'|null $InstanceStatus
 */
class GameServerInstance extends Shape
{
    /**
     * @param array{
     *     GameServerGroupName?: string|null,
     *     GameServerGroupArn?: string|null,
     *     InstanceId?: string|null,
     *     InstanceStatus?: 'ACTIVE'|'DRAINING'|'SPOT_TERMINATING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
