<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $RMSE
 * @property list<WeightedQuantileLoss> $WeightedQuantileLosses
 * @property list<ErrorMetric> $ErrorMetrics
 * @property double $AverageWeightedQuantileLoss
 */
class Metrics extends Shape
{
    /**
     * @param array{
     *     RMSE?: double,
     *     WeightedQuantileLosses?: list<WeightedQuantileLoss>,
     *     ErrorMetrics?: list<ErrorMetric>,
     *     AverageWeightedQuantileLoss?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
