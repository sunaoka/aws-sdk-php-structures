<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateCoreNetworkEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $coreNetworkArn
 * @property string $globalResolverId
 * @property list<Shapes\CoreNetworkEndpointDnsIpInputItem> $ipAddresses
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class CreateCoreNetworkEndpointRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     coreNetworkArn: string,
     *     globalResolverId: string,
     *     ipAddresses: list<Shapes\CoreNetworkEndpointDnsIpInputItem>,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
