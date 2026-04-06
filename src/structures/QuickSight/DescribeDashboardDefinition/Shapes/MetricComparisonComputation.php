<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string|null $Name
 * @property DimensionField|null $Time
 * @property MeasureField|null $FromValue
 * @property MeasureField|null $TargetValue
 */
class MetricComparisonComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string|null,
     *     Time?: DimensionField|null,
     *     FromValue?: MeasureField|null,
     *     TargetValue?: MeasureField|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
