<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Metric
 * @property string $Description
 * @property string $Unit
 */
class ResponseResourceMetric extends Shape
{
    /**
     * @param array{
     *     Metric?: string,
     *     Description?: string,
     *     Unit?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
