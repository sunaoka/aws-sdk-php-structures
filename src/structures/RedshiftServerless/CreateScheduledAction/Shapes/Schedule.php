<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\CreateScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $at
 * @property string|null $cron
 */
class Schedule extends Shape
{
    /**
     * @param array{
     *     at?: \Aws\Api\DateTimeResult|null,
     *     cron?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
