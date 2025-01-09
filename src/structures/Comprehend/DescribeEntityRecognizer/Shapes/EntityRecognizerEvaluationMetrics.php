<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntityRecognizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Precision
 * @property double $Recall
 * @property double $F1Score
 */
class EntityRecognizerEvaluationMetrics extends Shape
{
    /**
     * @param array{
     *     Precision?: double,
     *     Recall?: double,
     *     F1Score?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
