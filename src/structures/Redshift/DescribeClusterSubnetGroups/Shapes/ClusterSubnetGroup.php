<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterSubnetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterSubnetGroupName
 * @property string|null $Description
 * @property string|null $VpcId
 * @property string|null $SubnetGroupStatus
 * @property list<Subnet>|null $Subnets
 * @property list<Tag>|null $Tags
 * @property list<string>|null $SupportedClusterIpAddressTypes
 */
class ClusterSubnetGroup extends Shape
{
    /**
     * @param array{
     *     ClusterSubnetGroupName?: string|null,
     *     Description?: string|null,
     *     VpcId?: string|null,
     *     SubnetGroupStatus?: string|null,
     *     Subnets?: list<Subnet>|null,
     *     Tags?: list<Tag>|null,
     *     SupportedClusterIpAddressTypes?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
