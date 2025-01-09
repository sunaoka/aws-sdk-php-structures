<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServiceNetworkServiceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainName
 * @property string $hostedZoneId
 */
class DnsEntry extends Shape
{
    /**
     * @param array{
     *     domainName?: string,
     *     hostedZoneId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
