<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationChildEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $managedNotificationConfigurationArn
 * @property string $relatedAccount
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property ManagedNotificationChildEventSummary $childEvent
 * @property string $aggregateManagedNotificationEventArn
 * @property string|null $organizationalUnitId
 */
class ManagedNotificationChildEventOverview extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     managedNotificationConfigurationArn: string,
     *     relatedAccount: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     childEvent: ManagedNotificationChildEventSummary,
     *     aggregateManagedNotificationEventArn: string,
     *     organizationalUnitId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
