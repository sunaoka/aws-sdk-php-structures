<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $EventPattern
 * @property string|null $ScheduleExpression
 * @property 'ENABLED'|'DISABLED'|'ENABLED_WITH_ALL_CLOUDTRAIL_MANAGEMENT_EVENTS'|null $State
 * @property string|null $Description
 * @property string|null $RoleArn
 * @property string|null $ManagedBy
 * @property string|null $EventBusName
 * @property string|null $CreatedBy
 */
class DescribeRuleResponse extends Response
{
}
