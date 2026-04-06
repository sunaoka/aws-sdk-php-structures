<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\DeleteProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NatGatewayId
 * @property string|null $ProxyName
 * @property string|null $ProxyArn
 */
class DeleteProxyRequest extends Request
{
    /**
     * @param array{
     *     NatGatewayId: string,
     *     ProxyName?: string|null,
     *     ProxyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
