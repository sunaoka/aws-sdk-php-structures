<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroupMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RuleGroupArn
 * @property string $RuleGroupName
 * @property string $Description
 * @property 'STATELESS'|'STATEFUL' $Type
 * @property int $Capacity
 * @property Shapes\StatefulRuleOptions $StatefulRuleOptions
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class DescribeRuleGroupMetadataResponse extends Response
{
}
