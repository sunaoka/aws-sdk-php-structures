<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSecondarySubnet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecondarySubnetId
 * @property string|null $SecondarySubnetArn
 * @property string|null $SecondaryNetworkId
 * @property 'rdma'|null $SecondaryNetworkType
 * @property string|null $OwnerId
 * @property string|null $AvailabilityZoneId
 * @property string|null $AvailabilityZone
 * @property list<SecondarySubnetIpv4CidrBlockAssociation>|null $Ipv4CidrBlockAssociations
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|null $State
 * @property string|null $StateReason
 * @property list<Tag>|null $Tags
 */
class SecondarySubnet extends Shape
{
    /**
     * @param array{
     *     SecondarySubnetId?: string|null,
     *     SecondarySubnetArn?: string|null,
     *     SecondaryNetworkId?: string|null,
     *     SecondaryNetworkType?: 'rdma'|null,
     *     OwnerId?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     AvailabilityZone?: string|null,
     *     Ipv4CidrBlockAssociations?: list<SecondarySubnetIpv4CidrBlockAssociation>|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|null,
     *     StateReason?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
