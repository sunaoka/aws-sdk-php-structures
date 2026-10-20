<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $gatewayArn
 * @property string|null $gatewayRouteArn
 * @property string|null $portName
 * @property string|null $serviceUrl
 * @property 'PUBLIC'|'PRIVATE'|null $accessType
 * @property 'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null $status
 * @property GatewayConnectionResources|null $resources
 */
class GatewayConnection extends Shape
{
    /**
     * @param array{
     *     gatewayArn?: string|null,
     *     gatewayRouteArn?: string|null,
     *     portName?: string|null,
     *     serviceUrl?: string|null,
     *     accessType?: 'PUBLIC'|'PRIVATE'|null,
     *     status?: 'ACTIVE'|'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'DELETE_IN_PROGRESS'|'DELETE_FAILED'|null,
     *     resources?: GatewayConnectionResources|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
