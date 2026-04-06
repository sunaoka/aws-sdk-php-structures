<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $managedNotificationConfigurationArn
 * @property string $relatedAccount
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property ManagedNotificationEventSummary $notificationEvent
 * @property 'AGGREGATE'|'CHILD'|'NONE'|null $aggregationEventType
 * @property string|null $organizationalUnitId
 * @property AggregationSummary|null $aggregationSummary
 * @property list<string>|null $aggregatedNotificationRegions
 */
class ManagedNotificationEventOverview extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     managedNotificationConfigurationArn: string,
     *     relatedAccount: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     notificationEvent: ManagedNotificationEventSummary,
     *     aggregationEventType?: 'AGGREGATE'|'CHILD'|'NONE'|null,
     *     organizationalUnitId?: string|null,
     *     aggregationSummary?: AggregationSummary|null,
     *     aggregatedNotificationRegions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
