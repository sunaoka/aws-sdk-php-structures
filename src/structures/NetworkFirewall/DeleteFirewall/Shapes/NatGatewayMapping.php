<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteFirewall\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NatGatewayId
 */
class NatGatewayMapping extends Shape
{
    /**
     * @param array{NatGatewayId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
