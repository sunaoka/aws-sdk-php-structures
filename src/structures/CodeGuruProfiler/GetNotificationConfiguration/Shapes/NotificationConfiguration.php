<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetNotificationConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Channel> $channels
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{channels?: list<Channel>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
