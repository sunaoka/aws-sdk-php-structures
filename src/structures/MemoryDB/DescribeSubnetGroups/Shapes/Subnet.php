<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeSubnetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Identifier
 * @property AvailabilityZone $AvailabilityZone
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     Identifier?: string,
     *     AvailabilityZone?: AvailabilityZone
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
