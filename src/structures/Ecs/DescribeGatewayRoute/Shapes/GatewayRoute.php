<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGatewayRoute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $gatewayRouteArn
 * @property string|null $serviceArn
 * @property string|null $serviceContainerPortName
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null $status
 * @property string|null $serviceUrl
 * @property GatewayRouteResources|null $resources
 */
class GatewayRoute extends Shape
{
    /**
     * @param array{
     *     gatewayRouteArn?: string|null,
     *     serviceArn?: string|null,
     *     serviceContainerPortName?: string|null,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null,
     *     serviceUrl?: string|null,
     *     resources?: GatewayRouteResources|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
