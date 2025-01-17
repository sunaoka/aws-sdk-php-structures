<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $notificationConfigurationArn
 * @property string $relatedAccount
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property NotificationEventSummary $notificationEvent
 * @property 'AGGREGATE'|'CHILD'|'NONE'|null $aggregationEventType
 * @property string|null $aggregateNotificationEventArn
 * @property AggregationSummary|null $aggregationSummary
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
     *     aggregationEventType?: 'AGGREGATE'|'CHILD'|'NONE'|null,
     *     aggregateNotificationEventArn?: string|null,
     *     aggregationSummary?: AggregationSummary|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
