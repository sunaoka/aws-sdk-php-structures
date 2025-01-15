<?php

namespace Sunaoka\Aws\Structures\Glue\GetWorkflowRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $NotifyDelayAfter
 */
class NotificationProperty extends Shape
{
    /**
     * @param array{NotifyDelayAfter?: int<1, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
