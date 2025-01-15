<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainName
 * @property string|null $hostedZoneId
 */
class DnsEntry extends Shape
{
    /**
     * @param array{
     *     domainName?: string|null,
     *     hostedZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
