<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\DescribeRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $EventPattern
 * @property string|null $ScheduleExpression
 * @property 'ENABLED'|'DISABLED'|null $State
 * @property string|null $Description
 * @property string|null $RoleArn
 * @property string|null $ManagedBy
 * @property string|null $EventBusName
 * @property string|null $CreatedBy
 */
class DescribeRuleResponse extends Response
{
}
