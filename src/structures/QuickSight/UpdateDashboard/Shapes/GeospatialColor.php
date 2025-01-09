<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialSolidColor $Solid
 * @property GeospatialGradientColor $Gradient
 * @property GeospatialCategoricalColor $Categorical
 */
class GeospatialColor extends Shape
{
    /**
     * @param array{
     *     Solid?: GeospatialSolidColor,
     *     Gradient?: GeospatialGradientColor,
     *     Categorical?: GeospatialCategoricalColor
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
