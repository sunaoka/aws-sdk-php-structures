<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\GetCoreNetworkEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ipv4Address
 * @property string|null $ipv6Address
 * @property string $dnsLabel
 * @property string|null $dnsName
 * @property 'ALL'|'REGIONAL' $regionScope
 * @property list<string>|null $regions
 */
class CoreNetworkEndpointDnsIpItem extends Shape
{
    /**
     * @param array{
     *     ipv4Address?: string|null,
     *     ipv6Address?: string|null,
     *     dnsLabel: string,
     *     dnsName?: string|null,
     *     regionScope: 'ALL'|'REGIONAL',
     *     regions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
