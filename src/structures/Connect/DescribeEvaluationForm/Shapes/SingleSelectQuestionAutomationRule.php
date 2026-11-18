<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationFormItemEnablementCondition $Condition
 * @property string $OptionRefId
 */
class SingleSelectQuestionAutomationRule extends Shape
{
    /**
     * @param array{
     *     Condition: EvaluationFormItemEnablementCondition,
     *     OptionRefId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
