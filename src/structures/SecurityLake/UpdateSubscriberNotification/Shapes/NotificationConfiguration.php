<?php

namespace Sunaoka\Aws\Structures\SecurityLake\UpdateSubscriberNotification\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpsNotificationConfiguration $httpsNotificationConfiguration
 * @property SqsNotificationConfiguration $sqsNotificationConfiguration
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     httpsNotificationConfiguration?: HttpsNotificationConfiguration,
     *     sqsNotificationConfiguration?: SqsNotificationConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
