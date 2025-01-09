<?php

namespace Sunaoka\Aws\Structures\FraudDetector\ListEventPredictions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $startTime
 * @property string $endTime
 */
class PredictionTimeRange extends Shape
{
    /**
     * @param array{
     *     startTime: string,
     *     endTime: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
