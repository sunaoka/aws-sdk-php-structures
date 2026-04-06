<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationFormSingleSelectQuestionAutomationOption> $Options
 * @property string|null $DefaultOptionRefId
 */
class EvaluationFormSingleSelectQuestionAutomation extends Shape
{
    /**
     * @param array{
     *     Options: list<EvaluationFormSingleSelectQuestionAutomationOption>,
     *     DefaultOptionRefId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
