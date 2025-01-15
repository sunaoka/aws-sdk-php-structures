<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpProtocol
 * @property int|null $FromPort
 * @property int|null $ToPort
 * @property list<AwsEc2SecurityGroupUserIdGroupPair>|null $UserIdGroupPairs
 * @property list<AwsEc2SecurityGroupIpRange>|null $IpRanges
 * @property list<AwsEc2SecurityGroupIpv6Range>|null $Ipv6Ranges
 * @property list<AwsEc2SecurityGroupPrefixListId>|null $PrefixListIds
 */
class AwsEc2SecurityGroupIpPermission extends Shape
{
    /**
     * @param array{
     *     IpProtocol?: string|null,
     *     FromPort?: int|null,
     *     ToPort?: int|null,
     *     UserIdGroupPairs?: list<AwsEc2SecurityGroupUserIdGroupPair>|null,
     *     IpRanges?: list<AwsEc2SecurityGroupIpRange>|null,
     *     Ipv6Ranges?: list<AwsEc2SecurityGroupIpv6Range>|null,
     *     PrefixListIds?: list<AwsEc2SecurityGroupPrefixListId>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
