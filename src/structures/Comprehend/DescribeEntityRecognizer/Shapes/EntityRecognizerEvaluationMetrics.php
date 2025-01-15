<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntityRecognizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Precision
 * @property double|null $Recall
 * @property double|null $F1Score
 */
class EntityRecognizerEvaluationMetrics extends Shape
{
    /**
     * @param array{
     *     Precision?: double|null,
     *     Recall?: double|null,
     *     F1Score?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
