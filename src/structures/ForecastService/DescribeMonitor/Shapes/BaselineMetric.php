<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property double|null $Value
 */
class BaselineMetric extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Value?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
