<?php

namespace Sunaoka\Aws\Structures\PrometheusService\CreateAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $amount
 * @property double|null $ratio
 */
class IgnoreNearExpected extends Shape
{
    /**
     * @param array{
     *     amount?: double|null,
     *     ratio?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
