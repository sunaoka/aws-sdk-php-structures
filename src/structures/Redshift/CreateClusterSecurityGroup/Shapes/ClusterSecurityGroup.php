<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterSecurityGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterSecurityGroupName
 * @property string $Description
 * @property list<EC2SecurityGroup> $EC2SecurityGroups
 * @property list<IPRange> $IPRanges
 * @property list<Tag> $Tags
 */
class ClusterSecurityGroup extends Shape
{
    /**
     * @param array{
     *     ClusterSecurityGroupName?: string,
     *     Description?: string,
     *     EC2SecurityGroups?: list<EC2SecurityGroup>,
     *     IPRanges?: list<IPRange>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
