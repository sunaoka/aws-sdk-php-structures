<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListManagedEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedLogs|null $managedLogs
 * @property 'ENABLED'|'DISABLED'|null $persistentAppUI
 * @property CloudWatchMonitoringConfiguration|null $cloudWatchMonitoringConfiguration
 * @property S3MonitoringConfiguration|null $s3MonitoringConfiguration
 * @property ContainerLogRotationConfiguration|null $containerLogRotationConfiguration
 */
class MonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     managedLogs?: ManagedLogs|null,
     *     persistentAppUI?: 'ENABLED'|'DISABLED'|null,
     *     cloudWatchMonitoringConfiguration?: CloudWatchMonitoringConfiguration|null,
     *     s3MonitoringConfiguration?: S3MonitoringConfiguration|null,
     *     containerLogRotationConfiguration?: ContainerLogRotationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
