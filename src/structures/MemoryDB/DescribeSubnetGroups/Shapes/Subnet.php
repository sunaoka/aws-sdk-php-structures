<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeSubnetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Identifier
 * @property AvailabilityZone|null $AvailabilityZone
 * @property list<'ipv4'|'ipv6'|'dual_stack'>|null $SupportedNetworkTypes
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     Identifier?: string|null,
     *     AvailabilityZone?: AvailabilityZone|null,
     *     SupportedNetworkTypes?: list<'ipv4'|'ipv6'|'dual_stack'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
