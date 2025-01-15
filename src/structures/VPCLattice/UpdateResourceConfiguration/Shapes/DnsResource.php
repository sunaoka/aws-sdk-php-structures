<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateResourceConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainName
 * @property 'IPV4'|'IPV6'|'DUALSTACK'|null $ipAddressType
 */
class DnsResource extends Shape
{
    /**
     * @param array{
     *     domainName?: string|null,
     *     ipAddressType?: 'IPV4'|'IPV6'|'DUALSTACK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
