<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $EventPattern
 * @property string $ScheduleExpression
 * @property 'ENABLED'|'DISABLED' $State
 * @property string $Description
 * @property string $RoleArn
 * @property string $ManagedBy
 * @property string $EventBusName
 * @property string $CreatedBy
 */
class DescribeRuleResponse extends Response
{
}
