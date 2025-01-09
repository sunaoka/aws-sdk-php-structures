<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property double $Value
 */
class BaselineMetric extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Value?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
