<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\StartEdgeConfigurationUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 * @property int $DurationInSeconds
 */
class ScheduleConfig extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression: string,
     *     DurationInSeconds: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
