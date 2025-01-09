<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $LambdaFunctionArn
 * @property ClientVpnEndpointAttributeStatus $Status
 */
class ClientConnectResponseOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     LambdaFunctionArn?: string,
     *     Status?: ClientVpnEndpointAttributeStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
