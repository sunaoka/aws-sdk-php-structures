<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetIdentifier
 * @property AvailabilityZone|null $SubnetAvailabilityZone
 * @property SubnetOutpost|null $SubnetOutpost
 * @property list<'ipv4'|'ipv6'|'dual_stack'>|null $SupportedNetworkTypes
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     SubnetIdentifier?: string|null,
     *     SubnetAvailabilityZone?: AvailabilityZone|null,
     *     SubnetOutpost?: SubnetOutpost|null,
     *     SupportedNetworkTypes?: list<'ipv4'|'ipv6'|'dual_stack'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
