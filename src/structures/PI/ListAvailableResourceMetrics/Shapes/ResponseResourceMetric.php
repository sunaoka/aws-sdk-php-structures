<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Metric
 * @property string|null $Description
 * @property string|null $Unit
 */
class ResponseResourceMetric extends Shape
{
    /**
     * @param array{
     *     Metric?: string|null,
     *     Description?: string|null,
     *     Unit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
