<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM' $ConfigurationTypeUpdate
 * @property 'APPLICATION'|'TASK'|'OPERATOR'|'PARALLELISM' $MetricsLevelUpdate
 * @property 'INFO'|'WARN'|'ERROR'|'DEBUG' $LogLevelUpdate
 */
class MonitoringConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     ConfigurationTypeUpdate?: 'DEFAULT'|'CUSTOM',
     *     MetricsLevelUpdate?: 'APPLICATION'|'TASK'|'OPERATOR'|'PARALLELISM',
     *     LogLevelUpdate?: 'INFO'|'WARN'|'ERROR'|'DEBUG'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
