<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateTransitGatewayMulticastDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetId
 * @property 'pendingAcceptance'|'associating'|'associated'|'disassociating'|'disassociated'|'rejected'|'failed' $State
 */
class SubnetAssociation extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string,
     *     State?: 'pendingAcceptance'|'associating'|'associated'|'disassociating'|'disassociated'|'rejected'|'failed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
