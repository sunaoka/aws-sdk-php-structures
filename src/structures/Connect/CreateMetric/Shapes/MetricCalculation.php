<?php

namespace Sunaoka\Aws\Structures\Connect\CreateMetric\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CalculationComponent> $CalculationComponents
 * @property string $Calculation
 */
class MetricCalculation extends Shape
{
    /**
     * @param array{
     *     CalculationComponents: list<CalculationComponent>,
     *     Calculation: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
