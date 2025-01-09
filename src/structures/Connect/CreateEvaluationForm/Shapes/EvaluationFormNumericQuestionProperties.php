<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinValue
 * @property int $MaxValue
 * @property list<EvaluationFormNumericQuestionOption> $Options
 * @property EvaluationFormNumericQuestionAutomation $Automation
 */
class EvaluationFormNumericQuestionProperties extends Shape
{
    /**
     * @param array{
     *     MinValue: int,
     *     MaxValue: int,
     *     Options?: list<EvaluationFormNumericQuestionOption>,
     *     Automation?: EvaluationFormNumericQuestionAutomation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
