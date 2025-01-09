<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $Source
 * @property list<DimensionField> $Destination
 * @property list<MeasureField> $Weight
 */
class SankeyDiagramAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Source?: list<DimensionField>,
     *     Destination?: list<DimensionField>,
     *     Weight?: list<MeasureField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
