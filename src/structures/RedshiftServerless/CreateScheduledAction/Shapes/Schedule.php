<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $at
 * @property string $cron
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     at?: \Aws\Api\DateTimeResult,
     *     cron?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
