<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INFO'|'WARN'|'ERROR'|'DEBUG'|null $LogLevel
 */
class ZeppelinMonitoringConfigurationDescription extends Shape
{
    /**
     * @param array{LogLevel?: 'INFO'|'WARN'|'ERROR'|'DEBUG'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
