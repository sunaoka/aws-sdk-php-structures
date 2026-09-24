<?php

namespace Sunaoka\Aws\Structures\CloudWatch\UpdateResourceMetricsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $IncludeMetrics
 */
class ResourceMetricSelection extends Shape
{
    /**
     * @param array{IncludeMetrics: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
