<?php

namespace Sunaoka\Aws\Structures\Notifications\GetNotificationConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property 'ACTIVE'|'PARTIALLY_ACTIVE'|'INACTIVE'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property 'LONG'|'SHORT'|'NONE' $aggregationDuration
 */
class GetNotificationConfigurationResponse extends Response
{
}
