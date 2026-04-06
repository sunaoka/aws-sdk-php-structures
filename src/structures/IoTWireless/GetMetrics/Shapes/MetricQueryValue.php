<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Min
 * @property double|null $Max
 * @property double|null $Sum
 * @property double|null $Avg
 * @property double|null $Std
 * @property double|null $P90
 */
class MetricQueryValue extends Shape
{
    /**
     * @param array{
     *     Min?: double|null,
     *     Max?: double|null,
     *     Sum?: double|null,
     *     Avg?: double|null,
     *     Std?: double|null,
     *     P90?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
