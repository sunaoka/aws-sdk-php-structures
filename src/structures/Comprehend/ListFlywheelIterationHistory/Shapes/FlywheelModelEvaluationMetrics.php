<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListFlywheelIterationHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $AverageF1Score
 * @property double|null $AveragePrecision
 * @property double|null $AverageRecall
 * @property double|null $AverageAccuracy
 */
class FlywheelModelEvaluationMetrics extends Shape
{
    /**
     * @param array{
     *     AverageF1Score?: double|null,
     *     AveragePrecision?: double|null,
     *     AverageRecall?: double|null,
     *     AverageAccuracy?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
