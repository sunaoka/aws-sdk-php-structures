<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateManagedEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $persistentAppUI
 * @property CloudWatchMonitoringConfiguration $cloudWatchMonitoringConfiguration
 * @property S3MonitoringConfiguration $s3MonitoringConfiguration
 * @property ContainerLogRotationConfiguration $containerLogRotationConfiguration
 */
class MonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     persistentAppUI?: 'ENABLED'|'DISABLED',
     *     cloudWatchMonitoringConfiguration?: CloudWatchMonitoringConfiguration,
     *     s3MonitoringConfiguration?: S3MonitoringConfiguration,
     *     containerLogRotationConfiguration?: ContainerLogRotationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
