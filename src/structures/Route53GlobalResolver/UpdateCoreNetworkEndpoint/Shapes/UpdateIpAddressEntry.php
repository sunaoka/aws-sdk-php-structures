<?php

namespace Sunaoka\Aws\Structures\Route53GlobalResolver\UpdateCoreNetworkEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ADD'|'REMOVE'|'UPDATE' $operation
 * @property string|null $ipv4Address
 * @property string|null $ipv6Address
 * @property string|null $dnsLabel
 * @property 'ALL'|'REGIONAL'|null $regionScope
 * @property list<string>|null $regions
 */
class UpdateIpAddressEntry extends Shape
{
    /**
     * @param array{
     *     operation: 'ADD'|'REMOVE'|'UPDATE',
     *     ipv4Address?: string|null,
     *     ipv6Address?: string|null,
     *     dnsLabel?: string|null,
     *     regionScope?: 'ALL'|'REGIONAL'|null,
     *     regions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
