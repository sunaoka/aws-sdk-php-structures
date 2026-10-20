<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGatewayResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $gatewayArn
 * @property GatewayInfrastructureResources|null $resources
 */
class GatewayResources extends Shape
{
    /**
     * @param array{
     *     gatewayArn?: string|null,
     *     resources?: GatewayInfrastructureResources|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
