<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayConnect\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'gre' $Protocol
 */
class CreateTransitGatewayConnectRequestOptions extends Shape
{
    /**
     * @param array{Protocol: 'gre'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
