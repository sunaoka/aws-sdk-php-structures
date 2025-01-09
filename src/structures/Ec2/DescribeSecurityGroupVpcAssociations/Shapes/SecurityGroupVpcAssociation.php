<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroupVpcAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupId
 * @property string $VpcId
 * @property string $VpcOwnerId
 * @property 'associating'|'associated'|'association-failed'|'disassociating'|'disassociated'|'disassociation-failed' $State
 * @property string $StateReason
 */
class SecurityGroupVpcAssociation extends Shape
{
    /**
     * @param array{
     *     GroupId?: string,
     *     VpcId?: string,
     *     VpcOwnerId?: string,
     *     State?: 'associating'|'associated'|'association-failed'|'disassociating'|'disassociated'|'disassociation-failed',
     *     StateReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
