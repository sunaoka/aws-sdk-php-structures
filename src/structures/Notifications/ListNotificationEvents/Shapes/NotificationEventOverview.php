<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $notificationConfigurationArn
 * @property string $relatedAccount
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property NotificationEventSummary $notificationEvent
 * @property 'AGGREGATE'|'CHILD'|'NONE' $aggregationEventType
 * @property string $aggregateNotificationEventArn
 */
class NotificationEventOverview extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     notificationConfigurationArn: string,
     *     relatedAccount: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     notificationEvent: NotificationEventSummary,
     *     aggregationEventType?: 'AGGREGATE'|'CHILD'|'NONE',
     *     aggregateNotificationEventArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
