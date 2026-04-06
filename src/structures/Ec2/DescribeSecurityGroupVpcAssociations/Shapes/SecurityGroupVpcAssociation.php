<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSecurityGroupVpcAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GroupId
 * @property string|null $VpcId
 * @property string|null $VpcOwnerId
 * @property 'associating'|'associated'|'association-failed'|'disassociating'|'disassociated'|'disassociation-failed'|null $State
 * @property string|null $StateReason
 * @property string|null $GroupOwnerId
 */
class SecurityGroupVpcAssociation extends Shape
{
    /**
     * @param array{
     *     GroupId?: string|null,
     *     VpcId?: string|null,
     *     VpcOwnerId?: string|null,
     *     State?: 'associating'|'associated'|'association-failed'|'disassociating'|'disassociated'|'disassociation-failed'|null,
     *     StateReason?: string|null,
     *     GroupOwnerId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
