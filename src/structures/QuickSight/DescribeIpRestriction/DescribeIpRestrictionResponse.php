<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeIpRestriction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AwsAccountId
 * @property array<string, string> $IpRestrictionRuleMap
 * @property array<string, string> $VpcIdRestrictionRuleMap
 * @property array<string, string> $VpcEndpointIdRestrictionRuleMap
 * @property bool $Enabled
 * @property string $RequestId
 * @property int $Status
 */
class DescribeIpRestrictionResponse extends Response
{
}
