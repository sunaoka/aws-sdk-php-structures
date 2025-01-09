<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterOperationV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JmxExporter $JmxExporter
 * @property NodeExporter $NodeExporter
 */
class Prometheus extends Shape
{
    /**
     * @param array{
     *     JmxExporter?: JmxExporter,
     *     NodeExporter?: NodeExporter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
