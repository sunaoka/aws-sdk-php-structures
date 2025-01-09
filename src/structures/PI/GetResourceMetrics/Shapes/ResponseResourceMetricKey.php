<?php

namespace Sunaoka\Aws\Structures\PI\GetResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Metric
 * @property array<string, string> $Dimensions
 */
class ResponseResourceMetricKey extends Shape
{
    /**
     * @param array{
     *     Metric: string,
     *     Dimensions?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
