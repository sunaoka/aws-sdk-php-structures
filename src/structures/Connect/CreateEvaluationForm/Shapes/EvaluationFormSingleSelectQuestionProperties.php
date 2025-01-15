<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationFormSingleSelectQuestionOption> $Options
 * @property 'DROPDOWN'|'RADIO'|null $DisplayAs
 * @property EvaluationFormSingleSelectQuestionAutomation|null $Automation
 */
class EvaluationFormSingleSelectQuestionProperties extends Shape
{
    /**
     * @param array{
     *     Options: list<EvaluationFormSingleSelectQuestionOption>,
     *     DisplayAs?: 'DROPDOWN'|'RADIO'|null,
     *     Automation?: EvaluationFormSingleSelectQuestionAutomation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
