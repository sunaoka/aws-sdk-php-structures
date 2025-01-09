<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $Groups
 * @property list<MeasureField> $Sizes
 * @property list<MeasureField> $Colors
 */
class TreeMapAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Groups?: list<DimensionField>,
     *     Sizes?: list<MeasureField>,
     *     Colors?: list<MeasureField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
