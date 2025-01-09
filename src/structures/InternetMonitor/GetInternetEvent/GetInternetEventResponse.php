<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\GetInternetEvent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EventId
 * @property string $EventArn
 * @property \Aws\Api\DateTimeResult $StartedAt
 * @property \Aws\Api\DateTimeResult $EndedAt
 * @property Shapes\ClientLocation $ClientLocation
 * @property 'AVAILABILITY'|'PERFORMANCE' $EventType
 * @property 'ACTIVE'|'RESOLVED' $EventStatus
 */
class GetInternetEventResponse extends Response
{
}
