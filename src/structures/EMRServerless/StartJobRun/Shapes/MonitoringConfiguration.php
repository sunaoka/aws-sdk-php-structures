<?php

namespace Sunaoka\Aws\Structures\EMRServerless\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3MonitoringConfiguration|null $s3MonitoringConfiguration
 * @property ManagedPersistenceMonitoringConfiguration|null $managedPersistenceMonitoringConfiguration
 * @property CloudWatchLoggingConfiguration|null $cloudWatchLoggingConfiguration
 * @property PrometheusMonitoringConfiguration|null $prometheusMonitoringConfiguration
 */
class MonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     s3MonitoringConfiguration?: S3MonitoringConfiguration|null,
     *     managedPersistenceMonitoringConfiguration?: ManagedPersistenceMonitoringConfiguration|null,
     *     cloudWatchLoggingConfiguration?: CloudWatchLoggingConfiguration|null,
     *     prometheusMonitoringConfiguration?: PrometheusMonitoringConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
