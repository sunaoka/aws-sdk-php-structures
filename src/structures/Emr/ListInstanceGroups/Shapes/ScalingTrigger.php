<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CloudWatchAlarmDefinition $CloudWatchAlarmDefinition
 */
class ScalingTrigger extends Shape
{
    /**
     * @param array{CloudWatchAlarmDefinition: CloudWatchAlarmDefinition} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
