<?php

namespace Sunaoka\Aws\Structures\KendraRanking\UpdateRescoreExecutionPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $RescoreCapacityUnits
 */
class CapacityUnitsConfiguration extends Shape
{
    /**
     * @param array{RescoreCapacityUnits: int<0, max>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
