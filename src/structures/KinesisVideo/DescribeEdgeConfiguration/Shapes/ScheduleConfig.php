<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DescribeEdgeConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 * @property int<60, 3600> $DurationInSeconds
 */
class ScheduleConfig extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression: string,
     *     DurationInSeconds: int<60, 3600>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
