<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField>|null $Source
 * @property list<DimensionField>|null $Destination
 * @property list<MeasureField>|null $Weight
 */
class SankeyDiagramAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Source?: list<DimensionField>|null,
     *     Destination?: list<DimensionField>|null,
     *     Weight?: list<MeasureField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
