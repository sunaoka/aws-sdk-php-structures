<?php

namespace Sunaoka\Aws\Structures\Ec2\ReplaceRouteTableAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'associating'|'associated'|'disassociating'|'disassociated'|'failed'|null $State
 * @property string|null $StatusMessage
 */
class RouteTableAssociationState extends Shape
{
    /**
     * @param array{
     *     State?: 'associating'|'associated'|'disassociating'|'disassociated'|'failed'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
