<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationFormItemEnablementConditionOperand> $Operands
 * @property 'OR'|'AND'|null $Operator
 */
class EvaluationFormItemEnablementCondition extends Shape
{
    /**
     * @param array{
     *     Operands: list<EvaluationFormItemEnablementConditionOperand>,
     *     Operator?: 'OR'|'AND'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
