<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PrometheusInfo $Prometheus
 */
class OpenMonitoringInfo extends Shape
{
    /**
     * @param array{Prometheus: PrometheusInfo} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
