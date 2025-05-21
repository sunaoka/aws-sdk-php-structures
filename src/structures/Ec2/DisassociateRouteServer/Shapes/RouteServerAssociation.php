<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateRouteServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $RouteServerId
 * @property string|null $VpcId
 * @property 'associating'|'associated'|'disassociating'|null $State
 */
class RouteServerAssociation extends Shape
{
    /**
     * @param array{
     *     RouteServerId?: string|null,
     *     VpcId?: string|null,
     *     State?: 'associating'|'associated'|'disassociating'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
