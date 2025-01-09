<?php

namespace Sunaoka\Aws\Structures\AppMesh\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACTIVE'|'INACTIVE'|'DELETED' $status
 */
class GatewayRouteStatus extends Shape
{
    /**
     * @param array{status: 'ACTIVE'|'INACTIVE'|'DELETED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
