<?php

namespace Sunaoka\Aws\Structures\Ec2\UpdateSecurityGroupRuleDescriptionsEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $FromPort
 * @property string|null $IpProtocol
 * @property list<IpRange>|null $IpRanges
 * @property list<Ipv6Range>|null $Ipv6Ranges
 * @property list<PrefixListId>|null $PrefixListIds
 * @property int|null $ToPort
 * @property list<UserIdGroupPair>|null $UserIdGroupPairs
 */
class IpPermission extends Shape
{
    /**
     * @param array{
     *     FromPort?: int|null,
     *     IpProtocol?: string|null,
     *     IpRanges?: list<IpRange>|null,
     *     Ipv6Ranges?: list<Ipv6Range>|null,
     *     PrefixListIds?: list<PrefixListId>|null,
     *     ToPort?: int|null,
     *     UserIdGroupPairs?: list<UserIdGroupPair>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
