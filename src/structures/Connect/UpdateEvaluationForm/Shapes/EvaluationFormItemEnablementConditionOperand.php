<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationFormItemEnablementExpression|null $Expression
 * @property EvaluationFormItemEnablementCondition|null $Condition
 */
class EvaluationFormItemEnablementConditionOperand extends Shape
{
    /**
     * @param array{
     *     Expression?: EvaluationFormItemEnablementExpression|null,
     *     Condition?: EvaluationFormItemEnablementCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
