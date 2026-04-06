<?php

namespace Sunaoka\Aws\Structures\Glue\GetColumnStatisticsTaskSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ScheduleExpression
 * @property 'SCHEDULED'|'NOT_SCHEDULED'|'TRANSITIONING'|null $State
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression?: string|null,
     *     State?: 'SCHEDULED'|'NOT_SCHEDULED'|'TRANSITIONING'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
