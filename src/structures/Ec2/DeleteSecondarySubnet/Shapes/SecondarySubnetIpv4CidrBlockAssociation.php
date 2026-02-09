<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteSecondarySubnet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $CidrBlock
 * @property 'associating'|'associated'|'association-failed'|'disassociating'|'disassociated'|'disassociation-failed'|null $State
 * @property string|null $StateReason
 */
class SecondarySubnetIpv4CidrBlockAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     CidrBlock?: string|null,
     *     State?: 'associating'|'associated'|'association-failed'|'disassociating'|'disassociated'|'disassociation-failed'|null,
     *     StateReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
