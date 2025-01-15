<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeospatialSolidColor|null $Solid
 * @property GeospatialGradientColor|null $Gradient
 * @property GeospatialCategoricalColor|null $Categorical
 */
class GeospatialColor extends Shape
{
    /**
     * @param array{
     *     Solid?: GeospatialSolidColor|null,
     *     Gradient?: GeospatialGradientColor|null,
     *     Categorical?: GeospatialCategoricalColor|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
