<?php

namespace Sunaoka\Aws\Structures\ForecastService\DescribeAutoPredictor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MonitorArn
 * @property string|null $Status
 */
class MonitorInfo extends Shape
{
    /**
     * @param array{
     *     MonitorArn?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
