<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyCacheSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetIdentifier
 * @property AvailabilityZone $SubnetAvailabilityZone
 * @property SubnetOutpost $SubnetOutpost
 * @property list<'ipv4'|'ipv6'|'dual_stack'> $SupportedNetworkTypes
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     SubnetIdentifier?: string,
     *     SubnetAvailabilityZone?: AvailabilityZone,
     *     SubnetOutpost?: SubnetOutpost,
     *     SupportedNetworkTypes?: list<'ipv4'|'ipv6'|'dual_stack'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
