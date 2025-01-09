<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $StorageCapacityUnits
 * @property int $QueryCapacityUnits
 */
class CapacityUnitsConfiguration extends Shape
{
    /**
     * @param array{
     *     StorageCapacityUnits: int,
     *     QueryCapacityUnits: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
