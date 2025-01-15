<?php

namespace Sunaoka\Aws\Structures\SecurityLake\CreateSubscriberNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpsNotificationConfiguration|null $httpsNotificationConfiguration
 * @property SqsNotificationConfiguration|null $sqsNotificationConfiguration
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     httpsNotificationConfiguration?: HttpsNotificationConfiguration|null,
     *     sqsNotificationConfiguration?: SqsNotificationConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
