<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField> $ColorDimensionsFields
 * @property list<MeasureField> $ColorValuesFields
 */
class GeospatialLayerColorField extends Shape
{
    /**
     * @param array{
     *     ColorDimensionsFields?: list<DimensionField>,
     *     ColorValuesFields?: list<MeasureField>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
