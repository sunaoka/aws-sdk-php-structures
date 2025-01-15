<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DimensionField>|null $ColorDimensionsFields
 * @property list<MeasureField>|null $ColorValuesFields
 */
class GeospatialLayerColorField extends Shape
{
    /**
     * @param array{
     *     ColorDimensionsFields?: list<DimensionField>|null,
     *     ColorValuesFields?: list<MeasureField>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
