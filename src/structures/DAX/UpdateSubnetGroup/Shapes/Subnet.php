<?php

namespace Sunaoka\Aws\Structures\DAX\UpdateSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetIdentifier
 * @property string|null $SubnetAvailabilityZone
 * @property list<'ipv4'|'ipv6'|'dual_stack'>|null $SupportedNetworkTypes
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     SubnetIdentifier?: string|null,
     *     SubnetAvailabilityZone?: string|null,
     *     SupportedNetworkTypes?: list<'ipv4'|'ipv6'|'dual_stack'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
