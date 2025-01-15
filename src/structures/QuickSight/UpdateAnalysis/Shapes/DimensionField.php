<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericalDimensionField|null $NumericalDimensionField
 * @property CategoricalDimensionField|null $CategoricalDimensionField
 * @property DateDimensionField|null $DateDimensionField
 */
class DimensionField extends Shape
{
    /**
     * @param array{
     *     NumericalDimensionField?: NumericalDimensionField|null,
     *     CategoricalDimensionField?: CategoricalDimensionField|null,
     *     DateDimensionField?: DateDimensionField|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
