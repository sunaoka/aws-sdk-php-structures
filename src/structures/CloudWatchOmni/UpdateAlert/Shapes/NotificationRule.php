<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NotificationTrigger $trigger
 * @property NotificationTarget $target
 */
class NotificationRule extends Shape
{
    /**
     * @param array{
     *     trigger: NotificationTrigger,
     *     target: NotificationTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
