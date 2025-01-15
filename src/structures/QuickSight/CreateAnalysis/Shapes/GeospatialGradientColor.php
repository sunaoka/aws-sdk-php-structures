<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GeospatialGradientStepColor> $StepColors
 * @property 'HIDDEN'|'VISIBLE'|null $NullDataVisibility
 * @property GeospatialNullDataSettings|null $NullDataSettings
 * @property double|null $DefaultOpacity
 */
class GeospatialGradientColor extends Shape
{
    /**
     * @param array{
     *     StepColors: list<GeospatialGradientStepColor>,
     *     NullDataVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     NullDataSettings?: GeospatialNullDataSettings|null,
     *     DefaultOpacity?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
