<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OwnerId
 * @property 'default'|'dedicated'|'host' $InstanceTenancy
 * @property list<VpcIpv6CidrBlockAssociation> $Ipv6CidrBlockAssociationSet
 * @property list<VpcCidrBlockAssociation> $CidrBlockAssociationSet
 * @property bool $IsDefault
 * @property list<Tag> $Tags
 * @property BlockPublicAccessStates $BlockPublicAccessStates
 * @property string $VpcId
 * @property 'pending'|'available' $State
 * @property string $CidrBlock
 * @property string $DhcpOptionsId
 */
class Vpc extends Shape
{
    /**
     * @param array{
     *     OwnerId?: string,
     *     InstanceTenancy?: 'default'|'dedicated'|'host',
     *     Ipv6CidrBlockAssociationSet?: list<VpcIpv6CidrBlockAssociation>,
     *     CidrBlockAssociationSet?: list<VpcCidrBlockAssociation>,
     *     IsDefault?: bool,
     *     Tags?: list<Tag>,
     *     BlockPublicAccessStates?: BlockPublicAccessStates,
     *     VpcId?: string,
     *     State?: 'pending'|'available',
     *     CidrBlock?: string,
     *     DhcpOptionsId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
