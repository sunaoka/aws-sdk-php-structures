<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\CreateAccessSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $cidr
 * @property string|null $clientToken
 * @property 'IPV4'|'IPV6'|'NONE'|null $ipAddressType
 * @property string|null $name
 * @property string|null $coreNetworkEndpointId
 * @property string|null $segment
 * @property string $dnsViewId
 * @property 'DO53'|'DOH'|'DOT' $protocol
 * @property array<string, string>|null $tags
 */
class CreateAccessSourceRequest extends Request
{
    /**
     * @param array{
     *     cidr?: string|null,
     *     clientToken?: string|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|'NONE'|null,
     *     name?: string|null,
     *     coreNetworkEndpointId?: string|null,
     *     segment?: string|null,
     *     dnsViewId: string,
     *     protocol: 'DO53'|'DOH'|'DOT',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
