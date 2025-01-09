<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeStaleSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FromPort
 * @property string $IpProtocol
 * @property list<string> $IpRanges
 * @property list<string> $PrefixListIds
 * @property int $ToPort
 * @property list<UserIdGroupPair> $UserIdGroupPairs
 */
class StaleIpPermission extends Shape
{
    /**
     * @param array{
     *     FromPort?: int,
     *     IpProtocol?: string,
     *     IpRanges?: list<string>,
     *     PrefixListIds?: list<string>,
     *     ToPort?: int,
     *     UserIdGroupPairs?: list<UserIdGroupPair>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
