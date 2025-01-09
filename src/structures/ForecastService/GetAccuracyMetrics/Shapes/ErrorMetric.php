<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ForecastType
 * @property double $WAPE
 * @property double $RMSE
 * @property double $MASE
 * @property double $MAPE
 */
class ErrorMetric extends Shape
{
    /**
     * @param array{
     *     ForecastType?: string,
     *     WAPE?: double,
     *     RMSE?: double,
     *     MASE?: double,
     *     MAPE?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
