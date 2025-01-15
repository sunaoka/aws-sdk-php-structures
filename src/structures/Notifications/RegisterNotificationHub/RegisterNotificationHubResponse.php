<?php

namespace Sunaoka\Aws\Structures\Notifications\RegisterNotificationHub;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $notificationHubRegion
 * @property Shapes\NotificationHubStatusSummary $statusSummary
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult|null $lastActivationTime
 */
class RegisterNotificationHubResponse extends Response
{
}
