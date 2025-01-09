<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationFormSingleSelectQuestionOption> $Options
 * @property 'DROPDOWN'|'RADIO' $DisplayAs
 * @property EvaluationFormSingleSelectQuestionAutomation $Automation
 */
class EvaluationFormSingleSelectQuestionProperties extends Shape
{
    /**
     * @param array{
     *     Options: list<EvaluationFormSingleSelectQuestionOption>,
     *     DisplayAs?: 'DROPDOWN'|'RADIO',
     *     Automation?: EvaluationFormSingleSelectQuestionAutomation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
