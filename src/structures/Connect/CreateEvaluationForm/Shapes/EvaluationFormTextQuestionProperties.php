<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationFormTextQuestionAutomation|null $Automation
 */
class EvaluationFormTextQuestionProperties extends Shape
{
    /**
     * @param array{Automation?: EvaluationFormTextQuestionAutomation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
