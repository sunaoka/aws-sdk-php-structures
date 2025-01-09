<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\DescribeNotificationRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property list<Shapes\EventTypeSummary> $EventTypes
 * @property string $Resource
 * @property list<Shapes\TargetSummary> $Targets
 * @property 'BASIC'|'FULL' $DetailType
 * @property string $CreatedBy
 * @property 'ENABLED'|'DISABLED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $LastModifiedTimestamp
 * @property array<string, string> $Tags
 */
class DescribeNotificationRuleResponse extends Response
{
}
