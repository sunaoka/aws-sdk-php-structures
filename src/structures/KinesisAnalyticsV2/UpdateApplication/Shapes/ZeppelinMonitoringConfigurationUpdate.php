<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INFO'|'WARN'|'ERROR'|'DEBUG' $LogLevelUpdate
 */
class ZeppelinMonitoringConfigurationUpdate extends Shape
{
    /**
     * @param array{LogLevelUpdate: 'INFO'|'WARN'|'ERROR'|'DEBUG'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
