<?php

namespace Sunaoka\Aws\Structures\Ec2\StopInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property InstanceState $CurrentState
 * @property InstanceState $PreviousState
 */
class InstanceStateChange extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     CurrentState?: InstanceState,
     *     PreviousState?: InstanceState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
