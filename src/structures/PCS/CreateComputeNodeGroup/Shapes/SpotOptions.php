<?php

namespace Sunaoka\Aws\Structures\PCS\CreateComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'lowest-price'|'capacity-optimized'|'price-capacity-optimized' $allocationStrategy
 */
class SpotOptions extends Shape
{
    /**
     * @param array{allocationStrategy?: 'lowest-price'|'capacity-optimized'|'price-capacity-optimized'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
