<?php

namespace Sunaoka\Aws\Structures\Glue\GetCrawlers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScheduleExpression
 * @property 'SCHEDULED'|'NOT_SCHEDULED'|'TRANSITIONING' $State
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     ScheduleExpression?: string,
     *     State?: 'SCHEDULED'|'NOT_SCHEDULED'|'TRANSITIONING'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
