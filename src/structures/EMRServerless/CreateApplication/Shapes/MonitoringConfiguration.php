<?php

namespace Sunaoka\Aws\Structures\EMRServerless\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3MonitoringConfiguration $s3MonitoringConfiguration
 * @property ManagedPersistenceMonitoringConfiguration $managedPersistenceMonitoringConfiguration
 * @property CloudWatchLoggingConfiguration $cloudWatchLoggingConfiguration
 * @property PrometheusMonitoringConfiguration $prometheusMonitoringConfiguration
 */
class MonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     s3MonitoringConfiguration?: S3MonitoringConfiguration,
     *     managedPersistenceMonitoringConfiguration?: ManagedPersistenceMonitoringConfiguration,
     *     cloudWatchLoggingConfiguration?: CloudWatchLoggingConfiguration,
     *     prometheusMonitoringConfiguration?: PrometheusMonitoringConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
