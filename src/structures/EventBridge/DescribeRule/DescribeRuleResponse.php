<?php

namespace Sunaoka\Aws\Structures\EventBridge\DescribeRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $EventPattern
 * @property string $ScheduleExpression
 * @property 'ENABLED'|'DISABLED'|'ENABLED_WITH_ALL_CLOUDTRAIL_MANAGEMENT_EVENTS' $State
 * @property string $Description
 * @property string $RoleArn
 * @property string $ManagedBy
 * @property string $EventBusName
 * @property string $CreatedBy
 */
class DescribeRuleResponse extends Response
{
}
