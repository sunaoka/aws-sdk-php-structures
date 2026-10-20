<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $inboundSecurityGroup
 */
class UpdateGatewayNetworkConfiguration extends Shape
{
    /**
     * @param array{inboundSecurityGroup?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
