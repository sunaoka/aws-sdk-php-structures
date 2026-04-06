<?php

namespace Sunaoka\Aws\Structures\PCS\GetComputeNodeGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'lowest-price'|'capacity-optimized'|'price-capacity-optimized'|null $allocationStrategy
 */
class SpotOptions extends Shape
{
    /**
     * @param array{allocationStrategy?: 'lowest-price'|'capacity-optimized'|'price-capacity-optimized'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
