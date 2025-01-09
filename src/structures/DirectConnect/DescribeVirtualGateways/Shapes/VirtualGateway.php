<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeVirtualGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $virtualGatewayId
 * @property string $virtualGatewayState
 */
class VirtualGateway extends Shape
{
    /**
     * @param array{
     *     virtualGatewayId?: string,
     *     virtualGatewayState?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
