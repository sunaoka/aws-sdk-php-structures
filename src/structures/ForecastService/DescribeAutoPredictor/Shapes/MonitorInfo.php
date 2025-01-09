<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MonitorArn
 * @property string $Status
 */
class MonitorInfo extends Shape
{
    /**
     * @param array{
     *     MonitorArn?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
