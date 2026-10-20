<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGatewayRoute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayRouteArn
 */
class DescribeGatewayRouteRequest extends Request
{
    /**
     * @param array{gatewayRouteArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
