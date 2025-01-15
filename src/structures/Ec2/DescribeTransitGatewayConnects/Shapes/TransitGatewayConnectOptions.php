<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeTransitGatewayConnects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'gre'|null $Protocol
 */
class TransitGatewayConnectOptions extends Shape
{
    /**
     * @param array{Protocol?: 'gre'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
