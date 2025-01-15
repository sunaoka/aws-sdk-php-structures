<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $LambdaFunctionArn
 * @property ClientVpnEndpointAttributeStatus|null $Status
 */
class ClientConnectResponseOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     LambdaFunctionArn?: string|null,
     *     Status?: ClientVpnEndpointAttributeStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
