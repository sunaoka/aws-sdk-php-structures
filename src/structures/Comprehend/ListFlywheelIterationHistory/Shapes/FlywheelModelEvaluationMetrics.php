<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListFlywheelIterationHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $AverageF1Score
 * @property double $AveragePrecision
 * @property double $AverageRecall
 * @property double $AverageAccuracy
 */
class FlywheelModelEvaluationMetrics extends Shape
{
    /**
     * @param array{
     *     AverageF1Score?: double,
     *     AveragePrecision?: double,
     *     AverageRecall?: double,
     *     AverageAccuracy?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
