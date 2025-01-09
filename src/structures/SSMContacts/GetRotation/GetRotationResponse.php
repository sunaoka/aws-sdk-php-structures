<?php

namespace Sunaoka\Aws\Structures\SSMContacts\GetRotation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RotationArn
 * @property string $Name
 * @property list<string> $ContactIds
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string $TimeZoneId
 * @property Shapes\RecurrenceSettings $Recurrence
 */
class GetRotationResponse extends Response
{
}
