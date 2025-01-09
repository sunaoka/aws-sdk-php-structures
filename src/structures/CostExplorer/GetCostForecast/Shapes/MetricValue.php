<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetCostForecast\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Amount
 * @property string $Unit
 */
class MetricValue extends Shape
{
    /**
     * @param array{
     *     Amount?: string,
     *     Unit?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
