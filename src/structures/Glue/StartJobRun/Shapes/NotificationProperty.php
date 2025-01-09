<?php

namespace Sunaoka\Aws\Structures\Glue\StartJobRun\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NotifyDelayAfter
 */
class NotificationProperty extends Shape
{
    /**
     * @param array{NotifyDelayAfter?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
