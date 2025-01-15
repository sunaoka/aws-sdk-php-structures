<?php

namespace Sunaoka\Aws\Structures\EMRContainers\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $persistentAppUI
 * @property CloudWatchMonitoringConfiguration|null $cloudWatchMonitoringConfiguration
 * @property S3MonitoringConfiguration|null $s3MonitoringConfiguration
 * @property ContainerLogRotationConfiguration|null $containerLogRotationConfiguration
 */
class MonitoringConfiguration extends Shape
{
    /**
     * @param array{
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
