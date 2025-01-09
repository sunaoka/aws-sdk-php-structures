<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $StorageCapacityUnits
 * @property int<0, max> $QueryCapacityUnits
 */
class CapacityUnitsConfiguration extends Shape
{
    /**
     * @param array{
     *     StorageCapacityUnits: int<0, max>,
     *     QueryCapacityUnits: int<0, max>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
