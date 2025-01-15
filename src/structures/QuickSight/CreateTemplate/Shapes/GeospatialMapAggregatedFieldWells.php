<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField>|null $Geospatial
 * @property list<MeasureField>|null $Values
 * @property list<DimensionField>|null $Colors
 */
class GeospatialMapAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Geospatial?: list<DimensionField>|null,
     *     Values?: list<MeasureField>|null,
     *     Colors?: list<DimensionField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
