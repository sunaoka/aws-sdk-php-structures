<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'associating'|'associated'|'disassociating'|'disassociated'|'failed' $State
 * @property string $StatusMessage
 */
class RouteTableAssociationState extends Shape
{
    /**
     * @param array{
     *     State?: 'associating'|'associated'|'disassociating'|'disassociated'|'failed',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
