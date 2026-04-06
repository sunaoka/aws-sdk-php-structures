<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string|null $Name
 * @property MeasureField|null $Value
 */
class TotalAggregationComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string|null,
     *     Value?: MeasureField|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
