<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericQuestionPropertyValueAutomation $PropertyValue
 */
class EvaluationFormNumericQuestionAutomation extends Shape
{
    /**
     * @param array{PropertyValue?: NumericQuestionPropertyValueAutomation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
