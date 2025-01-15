<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField>|null $Categories
 * @property list<MeasureField>|null $Values
 * @property list<DimensionField>|null $Breakdowns
 */
class WaterfallChartAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Categories?: list<DimensionField>|null,
     *     Values?: list<MeasureField>|null,
     *     Breakdowns?: list<DimensionField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
