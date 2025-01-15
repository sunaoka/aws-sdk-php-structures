<?php

namespace Sunaoka\Aws\Structures\EMRContainers\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $persistentAppUI
 * @property ParametricCloudWatchMonitoringConfiguration|null $cloudWatchMonitoringConfiguration
 * @property ParametricS3MonitoringConfiguration|null $s3MonitoringConfiguration
 */
class ParametricMonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     persistentAppUI?: string|null,
     *     cloudWatchMonitoringConfiguration?: ParametricCloudWatchMonitoringConfiguration|null,
     *     s3MonitoringConfiguration?: ParametricS3MonitoringConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
