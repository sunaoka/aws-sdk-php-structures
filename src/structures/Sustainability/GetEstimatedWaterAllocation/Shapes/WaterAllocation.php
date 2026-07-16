<?php

namespace Sunaoka\Aws\Structures\Sustainability\GetEstimatedWaterAllocation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Value
 * @property 'm3' $Unit
 */
class WaterAllocation extends Shape
{
    /**
     * @param array{
     *     Value: double,
     *     Unit: 'm3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
