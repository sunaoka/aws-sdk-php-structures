<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEFAULT'|'CUSTOM'|null $ConfigurationTypeUpdate
 * @property 'APPLICATION'|'TASK'|'OPERATOR'|'PARALLELISM'|null $MetricsLevelUpdate
 * @property 'INFO'|'WARN'|'ERROR'|'DEBUG'|null $LogLevelUpdate
 */
class MonitoringConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     ConfigurationTypeUpdate?: 'DEFAULT'|'CUSTOM'|null,
     *     MetricsLevelUpdate?: 'APPLICATION'|'TASK'|'OPERATOR'|'PARALLELISM'|null,
     *     LogLevelUpdate?: 'INFO'|'WARN'|'ERROR'|'DEBUG'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
