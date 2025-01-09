<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\CreateEventTrigger;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EventTriggerName
 * @property string $ObjectTypeName
 * @property string $Description
 * @property list<Shapes\EventTriggerCondition> $EventTriggerConditions
 * @property string $SegmentFilter
 * @property Shapes\EventTriggerLimits $EventTriggerLimits
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property array<string, string> $Tags
 */
class CreateEventTriggerResponse extends Response
{
}
