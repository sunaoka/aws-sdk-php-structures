<?php

namespace Sunaoka\Aws\Structures\Deadline\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property float|null $max
 * @property float $min
 * @property string $name
 */
class FleetAmountCapability extends Shape
{
    /**
     * @param array{
     *     max?: float|null,
     *     min: float,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
