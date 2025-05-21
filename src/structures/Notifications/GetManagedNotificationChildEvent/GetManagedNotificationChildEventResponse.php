<?php

namespace Sunaoka\Aws\Structures\Notifications\GetManagedNotificationChildEvent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $managedNotificationConfigurationArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property Shapes\ManagedNotificationChildEvent $content
 */
class GetManagedNotificationChildEventResponse extends Response
{
}
