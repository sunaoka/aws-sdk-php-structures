<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $RMSE
 * @property list<WeightedQuantileLoss>|null $WeightedQuantileLosses
 * @property list<ErrorMetric>|null $ErrorMetrics
 * @property double|null $AverageWeightedQuantileLoss
 */
class Metrics extends Shape
{
    /**
     * @param array{
     *     RMSE?: double|null,
     *     WeightedQuantileLosses?: list<WeightedQuantileLoss>|null,
     *     ErrorMetrics?: list<ErrorMetric>|null,
     *     AverageWeightedQuantileLoss?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
