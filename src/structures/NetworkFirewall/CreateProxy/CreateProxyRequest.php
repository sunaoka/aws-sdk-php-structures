<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\CreateProxy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProxyName
 * @property string $NatGatewayId
 * @property string|null $ProxyConfigurationName
 * @property string|null $ProxyConfigurationArn
 * @property list<Shapes\ListenerPropertyRequest>|null $ListenerProperties
 * @property Shapes\TlsInterceptPropertiesRequest $TlsInterceptProperties
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateProxyRequest extends Request
{
    /**
     * @param array{
     *     ProxyName: string,
     *     NatGatewayId: string,
     *     ProxyConfigurationName?: string|null,
     *     ProxyConfigurationArn?: string|null,
     *     ListenerProperties?: list<Shapes\ListenerPropertyRequest>|null,
     *     TlsInterceptProperties: Shapes\TlsInterceptPropertiesRequest,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
