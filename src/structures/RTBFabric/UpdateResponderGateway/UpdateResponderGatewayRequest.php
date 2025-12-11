<?php

namespace Sunaoka\Aws\Structures\RTBFabric\UpdateResponderGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $domainName
 * @property int<1, 65535> $port
 * @property 'HTTP'|'HTTPS' $protocol
 * @property Shapes\TrustStoreConfiguration|null $trustStoreConfiguration
 * @property Shapes\ManagedEndpointConfiguration|null $managedEndpointConfiguration
 * @property string $clientToken
 * @property string $gatewayId
 * @property string|null $description
 */
class UpdateResponderGatewayRequest extends Request
{
    /**
     * @param array{
     *     domainName?: string|null,
     *     port: int<1, 65535>,
     *     protocol: 'HTTP'|'HTTPS',
     *     trustStoreConfiguration?: Shapes\TrustStoreConfiguration|null,
     *     managedEndpointConfiguration?: Shapes\ManagedEndpointConfiguration|null,
     *     clientToken: string,
     *     gatewayId: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
