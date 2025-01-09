<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationFormSingleSelectQuestionAutomationOption> $Options
 * @property string $DefaultOptionRefId
 */
class EvaluationFormSingleSelectQuestionAutomation extends Shape
{
    /**
     * @param array{
     *     Options: list<EvaluationFormSingleSelectQuestionAutomationOption>,
     *     DefaultOptionRefId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
