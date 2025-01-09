<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\ListEdgeAgentConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScheduleConfig $ScheduleConfig
 */
class UploaderConfig extends Shape
{
    /**
     * @param array{ScheduleConfig: ScheduleConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
