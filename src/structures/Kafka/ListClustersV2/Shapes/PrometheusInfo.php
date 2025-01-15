<?php

namespace Sunaoka\Aws\Structures\Kafka\ListClustersV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JmxExporterInfo|null $JmxExporter
 * @property NodeExporterInfo|null $NodeExporter
 */
class PrometheusInfo extends Shape
{
    /**
     * @param array{
     *     JmxExporter?: JmxExporterInfo|null,
     *     NodeExporter?: NodeExporterInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
