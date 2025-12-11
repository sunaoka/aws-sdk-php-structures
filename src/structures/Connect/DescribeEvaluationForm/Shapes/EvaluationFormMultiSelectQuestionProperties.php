<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationFormMultiSelectQuestionOption> $Options
 * @property 'DROPDOWN'|'CHECKBOX'|null $DisplayAs
 * @property EvaluationFormMultiSelectQuestionAutomation|null $Automation
 */
class EvaluationFormMultiSelectQuestionProperties extends Shape
{
    /**
     * @param array{
     *     Options: list<EvaluationFormMultiSelectQuestionOption>,
     *     DisplayAs?: 'DROPDOWN'|'CHECKBOX'|null,
     *     Automation?: EvaluationFormMultiSelectQuestionAutomation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
