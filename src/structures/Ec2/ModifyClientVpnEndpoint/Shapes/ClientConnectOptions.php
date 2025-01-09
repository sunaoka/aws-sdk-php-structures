<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enabled
 * @property string $LambdaFunctionArn
 */
class ClientConnectOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool,
     *     LambdaFunctionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
