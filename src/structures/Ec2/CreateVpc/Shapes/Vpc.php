<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpc\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OwnerId
 * @property 'default'|'dedicated'|'host'|null $InstanceTenancy
 * @property list<VpcIpv6CidrBlockAssociation>|null $Ipv6CidrBlockAssociationSet
 * @property list<VpcCidrBlockAssociation>|null $CidrBlockAssociationSet
 * @property bool|null $IsDefault
 * @property list<Tag>|null $Tags
 * @property BlockPublicAccessStates|null $BlockPublicAccessStates
 * @property string|null $VpcId
 * @property 'pending'|'available'|null $State
 * @property string|null $CidrBlock
 * @property string|null $DhcpOptionsId
 */
class Vpc extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     InstanceTenancy?: 'default'|'dedicated'|'host'|null,
     *     Ipv6CidrBlockAssociationSet?: list<VpcIpv6CidrBlockAssociation>|null,
     *     CidrBlockAssociationSet?: list<VpcCidrBlockAssociation>|null,
     *     IsDefault?: bool|null,
     *     Tags?: list<Tag>|null,
     *     BlockPublicAccessStates?: BlockPublicAccessStates|null,
     *     VpcId?: string|null,
     *     State?: 'pending'|'available'|null,
     *     CidrBlock?: string|null,
     *     DhcpOptionsId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
