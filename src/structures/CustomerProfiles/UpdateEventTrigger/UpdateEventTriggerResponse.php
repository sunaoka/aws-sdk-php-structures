<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\UpdateEventTrigger;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EventTriggerName
 * @property string|null $ObjectTypeName
 * @property string|null $Description
 * @property list<Shapes\EventTriggerCondition>|null $EventTriggerConditions
 * @property string|null $SegmentFilter
 * @property Shapes\EventTriggerLimits|null $EventTriggerLimits
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property array<string, string>|null $Tags
 */
class UpdateEventTriggerResponse extends Response
{
}
