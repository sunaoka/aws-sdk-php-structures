<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecondaryNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecondaryNetworkId
 * @property string|null $SecondaryNetworkArn
 * @property string|null $OwnerId
 * @property 'rdma'|null $Type
 * @property 'create-in-progress'|'create-complete'|'create-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|null $State
 * @property string|null $StateReason
 * @property list<SecondaryNetworkIpv4CidrBlockAssociation>|null $Ipv4CidrBlockAssociations
 * @property list<Tag>|null $Tags
 */
class SecondaryNetwork extends Shape
{
    /**
     * @param array{
     *     SecondaryNetworkId?: string|null,
     *     SecondaryNetworkArn?: string|null,
     *     OwnerId?: string|null,
     *     Type?: 'rdma'|null,
     *     State?: 'create-in-progress'|'create-complete'|'create-failed'|'delete-in-progress'|'delete-complete'|'delete-failed'|null,
     *     StateReason?: string|null,
     *     Ipv4CidrBlockAssociations?: list<SecondaryNetworkIpv4CidrBlockAssociation>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
