<?php

namespace Sunaoka\Aws\Structures\Ec2\AuthorizeSecurityGroupEgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpProtocol
 * @property int|null $FromPort
 * @property int|null $ToPort
 * @property list<UserIdGroupPair>|null $UserIdGroupPairs
 * @property list<IpRange>|null $IpRanges
 * @property list<Ipv6Range>|null $Ipv6Ranges
 * @property list<PrefixListId>|null $PrefixListIds
 */
class IpPermission extends Shape
{
    /**
     * @param array{
     *     IpProtocol?: string|null,
     *     FromPort?: int|null,
     *     ToPort?: int|null,
     *     UserIdGroupPairs?: list<UserIdGroupPair>|null,
     *     IpRanges?: list<IpRange>|null,
     *     Ipv6Ranges?: list<Ipv6Range>|null,
     *     PrefixListIds?: list<PrefixListId>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
