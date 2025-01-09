<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateAlarmModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inputProperty
 * @property 'GREATER'|'GREATER_OR_EQUAL'|'LESS'|'LESS_OR_EQUAL'|'EQUAL'|'NOT_EQUAL' $comparisonOperator
 * @property string $threshold
 */
class SimpleRule extends Shape
{
    /**
     * @param array{
     *     inputProperty: string,
     *     comparisonOperator: 'GREATER'|'GREATER_OR_EQUAL'|'LESS'|'LESS_OR_EQUAL'|'EQUAL'|'NOT_EQUAL',
     *     threshold: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
