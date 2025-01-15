<?php

namespace Sunaoka\Aws\Structures\CodeStarNotifications\DescribeNotificationRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string|null $Name
 * @property list<Shapes\EventTypeSummary>|null $EventTypes
 * @property string|null $Resource
 * @property list<Shapes\TargetSummary>|null $Targets
 * @property 'BASIC'|'FULL'|null $DetailType
 * @property string|null $CreatedBy
 * @property 'ENABLED'|'DISABLED'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimestamp
 * @property array<string, string>|null $Tags
 */
class DescribeNotificationRuleResponse extends Response
{
}
