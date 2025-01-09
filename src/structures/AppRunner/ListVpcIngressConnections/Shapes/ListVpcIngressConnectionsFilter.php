<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListVpcIngressConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceArn
 * @property string $VpcEndpointId
 */
class ListVpcIngressConnectionsFilter extends Shape
{
    /**
     * @param array{
     *     ServiceArn?: string,
     *     VpcEndpointId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
