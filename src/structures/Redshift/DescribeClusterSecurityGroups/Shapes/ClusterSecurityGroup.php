<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterSecurityGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterSecurityGroupName
 * @property string|null $Description
 * @property list<EC2SecurityGroup>|null $EC2SecurityGroups
 * @property list<IPRange>|null $IPRanges
 * @property list<Tag>|null $Tags
 */
class ClusterSecurityGroup extends Shape
{
    /**
     * @param array{
     *     ClusterSecurityGroupName?: string|null,
     *     Description?: string|null,
     *     EC2SecurityGroups?: list<EC2SecurityGroup>|null,
     *     IPRanges?: list<IPRange>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
