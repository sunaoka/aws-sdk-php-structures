<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $GroupBy
 * @property list<MeasureField> $Values
 */
class TableAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     GroupBy?: list<DimensionField>,
     *     Values?: list<MeasureField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
