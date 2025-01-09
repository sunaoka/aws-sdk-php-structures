<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetAnomalies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUAL'|'GREATER_THAN_OR_EQUAL'|'LESS_THAN_OR_EQUAL'|'GREATER_THAN'|'LESS_THAN'|'BETWEEN' $NumericOperator
 * @property double $StartValue
 * @property double $EndValue
 */
class TotalImpactFilter extends Shape
{
    /**
     * @param array{
     *     NumericOperator: 'EQUAL'|'GREATER_THAN_OR_EQUAL'|'LESS_THAN_OR_EQUAL'|'GREATER_THAN'|'LESS_THAN'|'BETWEEN',
     *     StartValue: double,
     *     EndValue?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
