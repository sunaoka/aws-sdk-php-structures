<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericalMeasureField|null $NumericalMeasureField
 * @property CategoricalMeasureField|null $CategoricalMeasureField
 * @property DateMeasureField|null $DateMeasureField
 * @property CalculatedMeasureField|null $CalculatedMeasureField
 */
class MeasureField extends Shape
{
    /**
     * @param array{
     *     NumericalMeasureField?: NumericalMeasureField|null,
     *     CategoricalMeasureField?: CategoricalMeasureField|null,
     *     DateMeasureField?: DateMeasureField|null,
     *     CalculatedMeasureField?: CalculatedMeasureField|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
