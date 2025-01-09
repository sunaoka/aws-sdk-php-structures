<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Quantile
 * @property double $LossValue
 */
class WeightedQuantileLoss extends Shape
{
    /**
     * @param array{
     *     Quantile?: double,
     *     LossValue?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
