<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIpRestriction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AwsAccountId
 * @property array<string, string>|null $IpRestrictionRuleMap
 * @property array<string, string>|null $VpcIdRestrictionRuleMap
 * @property array<string, string>|null $VpcEndpointIdRestrictionRuleMap
 * @property bool|null $Enabled
 * @property string|null $RequestId
 * @property int|null $Status
 */
class DescribeIpRestrictionResponse extends Response
{
}
