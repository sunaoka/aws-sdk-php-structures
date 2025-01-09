<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceType
 */
class InstanceConfig extends Shape
{
    /**
     * @param array{instanceType?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
