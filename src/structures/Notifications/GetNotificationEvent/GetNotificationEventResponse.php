<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationEvent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $notificationConfigurationArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property Shapes\NotificationEvent $content
 */
class GetNotificationEventResponse extends Response
{
}
