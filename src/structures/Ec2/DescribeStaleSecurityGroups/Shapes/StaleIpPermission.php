<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStaleSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $FromPort
 * @property string|null $IpProtocol
 * @property list<string>|null $IpRanges
 * @property list<string>|null $PrefixListIds
 * @property int|null $ToPort
 * @property list<UserIdGroupPair>|null $UserIdGroupPairs
 */
class StaleIpPermission extends Shape
{
    /**
     * @param array{
     *     FromPort?: int|null,
     *     IpProtocol?: string|null,
     *     IpRanges?: list<string>|null,
     *     PrefixListIds?: list<string>|null,
     *     ToPort?: int|null,
     *     UserIdGroupPairs?: list<UserIdGroupPair>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
