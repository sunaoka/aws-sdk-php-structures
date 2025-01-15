<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListVpcIngressConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceArn
 * @property string|null $VpcEndpointId
 */
class ListVpcIngressConnectionsFilter extends Shape
{
    /**
     * @param array{
     *     ServiceArn?: string|null,
     *     VpcEndpointId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
