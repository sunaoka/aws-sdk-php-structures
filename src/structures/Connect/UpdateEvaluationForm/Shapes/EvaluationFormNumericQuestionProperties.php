<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MinValue
 * @property int $MaxValue
 * @property list<EvaluationFormNumericQuestionOption>|null $Options
 * @property EvaluationFormNumericQuestionAutomation|null $Automation
 */
class EvaluationFormNumericQuestionProperties extends Shape
{
    /**
     * @param array{
     *     MinValue: int,
     *     MaxValue: int,
     *     Options?: list<EvaluationFormNumericQuestionOption>|null,
     *     Automation?: EvaluationFormNumericQuestionAutomation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
