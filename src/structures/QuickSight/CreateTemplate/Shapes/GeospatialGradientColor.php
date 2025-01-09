<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GeospatialGradientStepColor> $StepColors
 * @property 'HIDDEN'|'VISIBLE' $NullDataVisibility
 * @property GeospatialNullDataSettings $NullDataSettings
 * @property double $DefaultOpacity
 */
class GeospatialGradientColor extends Shape
{
    /**
     * @param array{
     *     StepColors: list<GeospatialGradientStepColor>,
     *     NullDataVisibility?: 'HIDDEN'|'VISIBLE',
     *     NullDataSettings?: GeospatialNullDataSettings,
     *     DefaultOpacity?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
