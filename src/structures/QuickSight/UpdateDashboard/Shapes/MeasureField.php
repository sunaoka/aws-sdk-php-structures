<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericalMeasureField $NumericalMeasureField
 * @property CategoricalMeasureField $CategoricalMeasureField
 * @property DateMeasureField $DateMeasureField
 * @property CalculatedMeasureField $CalculatedMeasureField
 */
class MeasureField extends Shape
{
    /**
     * @param array{
     *     NumericalMeasureField?: NumericalMeasureField,
     *     CategoricalMeasureField?: CategoricalMeasureField,
     *     DateMeasureField?: DateMeasureField,
     *     CalculatedMeasureField?: CalculatedMeasureField
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
