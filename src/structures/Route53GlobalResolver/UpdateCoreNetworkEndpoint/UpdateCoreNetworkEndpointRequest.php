<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateCoreNetworkEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $coreNetworkEndpointId
 * @property string|null $name
 * @property list<Shapes\UpdateIpAddressEntry>|null $updateIpAddresses
 */
class UpdateCoreNetworkEndpointRequest extends Request
{
    /**
     * @param array{
     *     coreNetworkEndpointId: string,
     *     name?: string|null,
     *     updateIpAddresses?: list<Shapes\UpdateIpAddressEntry>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
