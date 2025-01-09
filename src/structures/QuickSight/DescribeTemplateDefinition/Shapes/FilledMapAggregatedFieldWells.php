<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $Geospatial
 * @property list<MeasureField> $Values
 */
class FilledMapAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Geospatial?: list<DimensionField>,
     *     Values?: list<MeasureField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
