<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClusterOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JmxExporter|null $JmxExporter
 * @property NodeExporter|null $NodeExporter
 */
class Prometheus extends Shape
{
    /**
     * @param array{
     *     JmxExporter?: JmxExporter|null,
     *     NodeExporter?: NodeExporter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
