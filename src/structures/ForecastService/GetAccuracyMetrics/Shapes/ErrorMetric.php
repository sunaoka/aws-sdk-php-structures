<?php

namespace Sunaoka\Aws\Structures\ForecastService\GetAccuracyMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ForecastType
 * @property double|null $WAPE
 * @property double|null $RMSE
 * @property double|null $MASE
 * @property double|null $MAPE
 */
class ErrorMetric extends Shape
{
    /**
     * @param array{
     *     ForecastType?: string|null,
     *     WAPE?: double|null,
     *     RMSE?: double|null,
     *     MASE?: double|null,
     *     MAPE?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
