<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\GetTrigger\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $startAfter
 * @property string $startBefore
 * @property Recurrence $recurrence
 */
class TimeRangeSchedule extends Shape
{
    /**
     * @param array{
     *     startAfter: string,
     *     startBefore: string,
     *     recurrence: Recurrence
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
