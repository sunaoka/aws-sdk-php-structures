<?php

namespace Sunaoka\Aws\Structures\EMRContainers\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $persistentAppUI
 * @property ParametricCloudWatchMonitoringConfiguration $cloudWatchMonitoringConfiguration
 * @property ParametricS3MonitoringConfiguration $s3MonitoringConfiguration
 */
class ParametricMonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     persistentAppUI?: string,
     *     cloudWatchMonitoringConfiguration?: ParametricCloudWatchMonitoringConfiguration,
     *     s3MonitoringConfiguration?: ParametricS3MonitoringConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
