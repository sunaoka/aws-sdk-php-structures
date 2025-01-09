<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationType
 * @property 'APPLICATION'|'TASK'|'OPERATOR'|'PARALLELISM' $MetricsLevel
 * @property 'INFO'|'WARN'|'ERROR'|'DEBUG' $LogLevel
 */
class MonitoringConfigurationDescription extends Shape
{
    /**
     * @param array{
     *     ConfigurationType?: 'DEFAULT'|'CUSTOM',
     *     MetricsLevel?: 'APPLICATION'|'TASK'|'OPERATOR'|'PARALLELISM',
     *     LogLevel?: 'INFO'|'WARN'|'ERROR'|'DEBUG'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
