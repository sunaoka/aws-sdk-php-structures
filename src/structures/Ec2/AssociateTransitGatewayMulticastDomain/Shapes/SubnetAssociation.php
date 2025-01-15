<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTransitGatewayMulticastDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetId
 * @property 'pendingAcceptance'|'associating'|'associated'|'disassociating'|'disassociated'|'rejected'|'failed'|null $State
 */
class SubnetAssociation extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string|null,
     *     State?: 'pendingAcceptance'|'associating'|'associated'|'disassociating'|'disassociated'|'rejected'|'failed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
