<?php

namespace Sunaoka\Aws\Structures\PCS\UpdateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $computeNodeGroupId
 */
class ComputeNodeGroupConfiguration extends Shape
{
    /**
     * @param array{computeNodeGroupId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
