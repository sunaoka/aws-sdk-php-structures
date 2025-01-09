<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $Rows
 * @property list<DimensionField> $Columns
 * @property list<MeasureField> $Values
 */
class HeatMapAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Rows?: list<DimensionField>,
     *     Columns?: list<DimensionField>,
     *     Values?: list<MeasureField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
