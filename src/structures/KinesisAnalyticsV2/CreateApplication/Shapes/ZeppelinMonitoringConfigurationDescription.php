<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INFO'|'WARN'|'ERROR'|'DEBUG' $LogLevel
 */
class ZeppelinMonitoringConfigurationDescription extends Shape
{
    /**
     * @param array{LogLevel?: 'INFO'|'WARN'|'ERROR'|'DEBUG'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
