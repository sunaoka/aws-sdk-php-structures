<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Quantile
 * @property double|null $LossValue
 */
class WeightedQuantileLoss extends Shape
{
    /**
     * @param array{
     *     Quantile?: double|null,
     *     LossValue?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
