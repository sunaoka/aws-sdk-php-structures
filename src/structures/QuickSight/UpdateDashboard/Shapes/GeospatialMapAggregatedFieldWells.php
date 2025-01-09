<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $Geospatial
 * @property list<MeasureField> $Values
 * @property list<DimensionField> $Colors
 */
class GeospatialMapAggregatedFieldWells extends Shape
{
    /**
     * @param array{
     *     Geospatial?: list<DimensionField>,
     *     Values?: list<MeasureField>,
     *     Colors?: list<DimensionField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
