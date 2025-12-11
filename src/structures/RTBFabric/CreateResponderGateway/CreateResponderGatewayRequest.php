<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateResponderGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 * @property string|null $domainName
 * @property int<1, 65535> $port
 * @property 'HTTP'|'HTTPS' $protocol
 * @property Shapes\TrustStoreConfiguration|null $trustStoreConfiguration
 * @property Shapes\ManagedEndpointConfiguration|null $managedEndpointConfiguration
 * @property string $clientToken
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class CreateResponderGatewayRequest extends Request
{
    /**
     * @param array{
     *     vpcId: string,
     *     subnetIds: list<string>,
     *     securityGroupIds: list<string>,
     *     domainName?: string|null,
     *     port: int<1, 65535>,
     *     protocol: 'HTTP'|'HTTPS',
     *     trustStoreConfiguration?: Shapes\TrustStoreConfiguration|null,
     *     managedEndpointConfiguration?: Shapes\ManagedEndpointConfiguration|null,
     *     clientToken: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
