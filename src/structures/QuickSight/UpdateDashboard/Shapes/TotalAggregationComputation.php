<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string $Name
 * @property MeasureField $Value
 */
class TotalAggregationComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string,
     *     Value?: MeasureField
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
