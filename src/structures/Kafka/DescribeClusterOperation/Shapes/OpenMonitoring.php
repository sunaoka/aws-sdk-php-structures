<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Prometheus $Prometheus
 */
class OpenMonitoring extends Shape
{
    /**
     * @param array{Prometheus: Prometheus} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
