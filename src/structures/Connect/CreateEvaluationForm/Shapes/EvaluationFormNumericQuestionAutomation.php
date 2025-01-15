<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericQuestionPropertyValueAutomation|null $PropertyValue
 */
class EvaluationFormNumericQuestionAutomation extends Shape
{
    /**
     * @param array{PropertyValue?: NumericQuestionPropertyValueAutomation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
