<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField>|null $Groups
 * @property list<MeasureField>|null $Sizes
 * @property list<MeasureField>|null $Colors
 */
class TreeMapAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Groups?: list<DimensionField>|null,
     *     Sizes?: list<MeasureField>|null,
     *     Colors?: list<MeasureField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
