<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputationId
 * @property string $Name
 * @property DimensionField $Time
 * @property MeasureField $FromValue
 * @property MeasureField $TargetValue
 */
class MetricComparisonComputation extends Shape
{
    /**
     * @param array{
     *     ComputationId: string,
     *     Name?: string,
     *     Time?: DimensionField,
     *     FromValue?: MeasureField,
     *     TargetValue?: MeasureField
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
