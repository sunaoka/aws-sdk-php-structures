<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericalDimensionField $NumericalDimensionField
 * @property CategoricalDimensionField $CategoricalDimensionField
 * @property DateDimensionField $DateDimensionField
 */
class DimensionField extends Shape
{
    /**
     * @param array{
     *     NumericalDimensionField?: NumericalDimensionField,
     *     CategoricalDimensionField?: CategoricalDimensionField,
     *     DateDimensionField?: DateDimensionField
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
