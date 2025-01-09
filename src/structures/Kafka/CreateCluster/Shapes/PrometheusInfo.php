<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property JmxExporterInfo $JmxExporter
 * @property NodeExporterInfo $NodeExporter
 */
class PrometheusInfo extends Shape
{
    /**
     * @param array{
     *     JmxExporter?: JmxExporterInfo,
     *     NodeExporter?: NodeExporterInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
