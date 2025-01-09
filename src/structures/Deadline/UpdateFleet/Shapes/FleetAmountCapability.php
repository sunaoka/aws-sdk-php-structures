<?php

namespace Sunaoka\Aws\Structures\Deadline\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property float $min
 * @property float $max
 */
class FleetAmountCapability extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     min: float,
     *     max?: float
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
