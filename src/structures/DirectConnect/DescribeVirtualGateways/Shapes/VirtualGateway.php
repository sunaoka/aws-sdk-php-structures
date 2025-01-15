<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeVirtualGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $virtualGatewayId
 * @property string|null $virtualGatewayState
 */
class VirtualGateway extends Shape
{
    /**
     * @param array{
     *     virtualGatewayId?: string|null,
     *     virtualGatewayState?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
