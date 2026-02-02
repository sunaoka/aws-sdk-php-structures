<?php

namespace Sunaoka\Aws\Structures\Iot\GetDeviceCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EQUALS'|'NOT_EQUALS'|'LESS_THAN'|'LESS_THAN_EQUALS'|'GREATER_THAN'|'GREATER_THAN_EQUALS'|'IN_SET'|'NOT_IN_SET'|'IN_RANGE'|'NOT_IN_RANGE' $comparisonOperator
 * @property CommandParameterValueComparisonOperand $operand
 */
class CommandParameterValueCondition extends Shape
{
    /**
     * @param array{
     *     comparisonOperator: 'EQUALS'|'NOT_EQUALS'|'LESS_THAN'|'LESS_THAN_EQUALS'|'GREATER_THAN'|'GREATER_THAN_EQUALS'|'IN_SET'|'NOT_IN_SET'|'IN_RANGE'|'NOT_IN_RANGE',
     *     operand: CommandParameterValueComparisonOperand
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
