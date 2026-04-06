<?php

namespace Sunaoka\Aws\Structures\Ec2\TerminateInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceState|null $CurrentState
 * @property string|null $InstanceId
 * @property InstanceState|null $PreviousState
 */
class InstanceStateChange extends Shape
{
    /**
     * @param array{
     *     CurrentState?: InstanceState|null,
     *     InstanceId?: string|null,
     *     PreviousState?: InstanceState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
