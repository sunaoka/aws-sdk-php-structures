<?php

namespace Sunaoka\Aws\Structures\Notifications\ListNotificationHubs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $notificationHubRegion
 * @property NotificationHubStatusSummary $statusSummary
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastActivationTime
 */
class NotificationHubOverview extends Shape
{
    /**
     * @param array{
     *     notificationHubRegion: string,
     *     statusSummary: NotificationHubStatusSummary,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     lastActivationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
