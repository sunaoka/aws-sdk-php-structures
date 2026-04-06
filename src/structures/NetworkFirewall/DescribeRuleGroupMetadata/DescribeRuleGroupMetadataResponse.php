<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DescribeRuleGroupMetadata;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RuleGroupArn
 * @property string $RuleGroupName
 * @property string|null $Description
 * @property 'STATELESS'|'STATEFUL'|null $Type
 * @property int|null $Capacity
 * @property Shapes\StatefulRuleOptions|null $StatefulRuleOptions
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $VendorName
 * @property string|null $ProductId
 * @property string|null $ListingName
 */
class DescribeRuleGroupMetadataResponse extends Response
{
}
