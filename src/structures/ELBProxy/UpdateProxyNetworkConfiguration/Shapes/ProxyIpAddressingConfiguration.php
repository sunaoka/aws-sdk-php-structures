<?php

namespace Sunaoka\Aws\Structures\ELBProxy\UpdateProxyNetworkConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'off'|'internet-facing'|'internal' $ipv4Addressability
 * @property 'off'|'internet-facing'|'internal' $ipv6Addressability
 */
class ProxyIpAddressingConfiguration extends Shape
{
    /**
     * @param array{
     *     ipv4Addressability: 'off'|'internet-facing'|'internal',
     *     ipv6Addressability: 'off'|'internet-facing'|'internal'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
