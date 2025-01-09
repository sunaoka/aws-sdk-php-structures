<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ActionNames
 */
class BatchScheduleActionDeleteRequest extends Shape
{
    /**
     * @param array{ActionNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
