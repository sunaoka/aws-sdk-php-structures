<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\AddNotificationChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Channel>|null $channels
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{channels?: list<Channel>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
