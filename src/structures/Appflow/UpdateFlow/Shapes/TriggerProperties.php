<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ScheduledTriggerProperties|null $Scheduled
 */
class TriggerProperties extends Shape
{
    /**
     * @param array{Scheduled?: ScheduledTriggerProperties|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
