<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationType
 * @property 'APPLICATION'|'TASK'|'OPERATOR'|'PARALLELISM'|null $MetricsLevel
 * @property 'INFO'|'WARN'|'ERROR'|'DEBUG'|null $LogLevel
 */
class MonitoringConfiguration extends Shape
{
    /**
     * @param array{
     *     ConfigurationType: 'DEFAULT'|'CUSTOM',
     *     MetricsLevel?: 'APPLICATION'|'TASK'|'OPERATOR'|'PARALLELISM'|null,
     *     LogLevel?: 'INFO'|'WARN'|'ERROR'|'DEBUG'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
