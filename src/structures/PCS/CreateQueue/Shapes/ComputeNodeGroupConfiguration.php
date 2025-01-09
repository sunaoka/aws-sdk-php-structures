<?php

namespace Sunaoka\Aws\Structures\PCS\CreateQueue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $computeNodeGroupId
 */
class ComputeNodeGroupConfiguration extends Shape
{
    /**
     * @param array{computeNodeGroupId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
