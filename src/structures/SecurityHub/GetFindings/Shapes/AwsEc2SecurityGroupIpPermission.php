<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpProtocol
 * @property int $FromPort
 * @property int $ToPort
 * @property list<AwsEc2SecurityGroupUserIdGroupPair> $UserIdGroupPairs
 * @property list<AwsEc2SecurityGroupIpRange> $IpRanges
 * @property list<AwsEc2SecurityGroupIpv6Range> $Ipv6Ranges
 * @property list<AwsEc2SecurityGroupPrefixListId> $PrefixListIds
 */
class AwsEc2SecurityGroupIpPermission extends Shape
{
    /**
     * @param array{
     *     IpProtocol?: string,
     *     FromPort?: int,
     *     ToPort?: int,
     *     UserIdGroupPairs?: list<AwsEc2SecurityGroupUserIdGroupPair>,
     *     IpRanges?: list<AwsEc2SecurityGroupIpRange>,
     *     Ipv6Ranges?: list<AwsEc2SecurityGroupIpv6Range>,
     *     PrefixListIds?: list<AwsEc2SecurityGroupPrefixListId>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
