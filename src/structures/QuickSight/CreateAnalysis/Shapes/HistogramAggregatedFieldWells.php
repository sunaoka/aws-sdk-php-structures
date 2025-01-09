<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MeasureField> $Values
 */
class HistogramAggregatedFieldWells extends Shape
{
    /**
     * @param array{Values?: list<MeasureField>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
