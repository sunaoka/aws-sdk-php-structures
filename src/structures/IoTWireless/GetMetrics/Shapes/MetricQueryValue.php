<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Min
 * @property double $Max
 * @property double $Sum
 * @property double $Avg
 * @property double $Std
 * @property double $P90
 */
class MetricQueryValue extends Shape
{
    /**
     * @param array{
     *     Min?: double,
     *     Max?: double,
     *     Sum?: double,
     *     Avg?: double,
     *     Std?: double,
     *     P90?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
