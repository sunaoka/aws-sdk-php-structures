<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterSubnetGroupName
 * @property string $Description
 * @property string $VpcId
 * @property string $SubnetGroupStatus
 * @property list<Subnet> $Subnets
 * @property list<Tag> $Tags
 * @property list<string> $SupportedClusterIpAddressTypes
 */
class ClusterSubnetGroup extends Shape
{
    /**
     * @param array{
     *     ClusterSubnetGroupName?: string,
     *     Description?: string,
     *     VpcId?: string,
     *     SubnetGroupStatus?: string,
     *     Subnets?: list<Subnet>,
     *     Tags?: list<Tag>,
     *     SupportedClusterIpAddressTypes?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
