<?php

namespace Sunaoka\Aws\Structures\VPCLattice\GetResourceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainName
 * @property 'IPV4'|'IPV6'|'DUALSTACK' $ipAddressType
 */
class DnsResource extends Shape
{
    /**
     * @param array{
     *     domainName?: string,
     *     ipAddressType?: 'IPV4'|'IPV6'|'DUALSTACK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
