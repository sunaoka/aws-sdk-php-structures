<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateClientVpnEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Enabled
 * @property string|null $LambdaFunctionArn
 */
class ClientConnectOptions extends Shape
{
    /**
     * @param array{
     *     Enabled?: bool|null,
     *     LambdaFunctionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
