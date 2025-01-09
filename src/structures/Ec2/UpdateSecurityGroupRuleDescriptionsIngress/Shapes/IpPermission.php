<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateSecurityGroupRuleDescriptionsIngress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpProtocol
 * @property int $FromPort
 * @property int $ToPort
 * @property list<UserIdGroupPair> $UserIdGroupPairs
 * @property list<IpRange> $IpRanges
 * @property list<Ipv6Range> $Ipv6Ranges
 * @property list<PrefixListId> $PrefixListIds
 */
class IpPermission extends Shape
{
    /**
     * @param array{
     *     IpProtocol?: string,
     *     FromPort?: int,
     *     ToPort?: int,
     *     UserIdGroupPairs?: list<UserIdGroupPair>,
     *     IpRanges?: list<IpRange>,
     *     Ipv6Ranges?: list<Ipv6Range>,
     *     PrefixListIds?: list<PrefixListId>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
