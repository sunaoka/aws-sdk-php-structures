<?php

namespace Sunaoka\Aws\Structures\Ec2\StartInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property InstanceState|null $CurrentState
 * @property InstanceState|null $PreviousState
 */
class InstanceStateChange extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     CurrentState?: InstanceState|null,
     *     PreviousState?: InstanceState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
