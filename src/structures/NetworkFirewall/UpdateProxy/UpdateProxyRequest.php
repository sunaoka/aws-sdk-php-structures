<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NatGatewayId
 * @property string|null $ProxyName
 * @property string|null $ProxyArn
 * @property list<Shapes\ListenerPropertyRequest>|null $ListenerPropertiesToAdd
 * @property list<Shapes\ListenerPropertyRequest>|null $ListenerPropertiesToRemove
 * @property Shapes\TlsInterceptPropertiesRequest|null $TlsInterceptProperties
 * @property string $UpdateToken
 */
class UpdateProxyRequest extends Request
{
    /**
     * @param array{
     *     NatGatewayId: string,
     *     ProxyName?: string|null,
     *     ProxyArn?: string|null,
     *     ListenerPropertiesToAdd?: list<Shapes\ListenerPropertyRequest>|null,
     *     ListenerPropertiesToRemove?: list<Shapes\ListenerPropertyRequest>|null,
     *     TlsInterceptProperties?: Shapes\TlsInterceptPropertiesRequest|null,
     *     UpdateToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
