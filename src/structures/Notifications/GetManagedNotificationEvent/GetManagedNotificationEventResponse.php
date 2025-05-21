<?php

namespace Sunaoka\Aws\Structures\Notifications\GetManagedNotificationEvent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $managedNotificationConfigurationArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property Shapes\ManagedNotificationEvent $content
 */
class GetManagedNotificationEventResponse extends Response
{
}
