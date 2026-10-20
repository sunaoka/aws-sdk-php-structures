<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeGatewayResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ElbGatewayResources>|null $hostSharedAlb
 */
class GatewayInfrastructureResources extends Shape
{
    /**
     * @param array{hostSharedAlb?: list<ElbGatewayResources>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
