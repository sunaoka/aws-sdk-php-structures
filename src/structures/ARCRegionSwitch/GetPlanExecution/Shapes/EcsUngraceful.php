<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, 99> $minimumSuccessPercentage
 */
class EcsUngraceful extends Shape
{
    /**
     * @param array{minimumSuccessPercentage: int<0, 99>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
