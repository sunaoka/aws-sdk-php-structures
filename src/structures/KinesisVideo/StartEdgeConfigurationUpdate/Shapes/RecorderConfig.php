<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\StartEdgeConfigurationUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MediaSourceConfig $MediaSourceConfig
 * @property ScheduleConfig $ScheduleConfig
 */
class RecorderConfig extends Shape
{
    /**
     * @param array{
     *     MediaSourceConfig: MediaSourceConfig,
     *     ScheduleConfig?: ScheduleConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
