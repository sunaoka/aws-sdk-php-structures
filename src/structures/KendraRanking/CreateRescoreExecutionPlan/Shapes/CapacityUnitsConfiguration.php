<?php

namespace Sunaoka\Aws\Structures\KendraRanking\CreateRescoreExecutionPlan\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $RescoreCapacityUnits
 */
class CapacityUnitsConfiguration extends Shape
{
    /**
     * @param array{RescoreCapacityUnits: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
