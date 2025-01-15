<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MeasureField>|null $Values
 */
class HistogramAggregatedFieldWells extends Shape
{
    /**
     * @param array{Values?: list<MeasureField>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
