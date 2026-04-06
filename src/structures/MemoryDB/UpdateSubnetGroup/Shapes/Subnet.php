<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Identifier
 * @property AvailabilityZone|null $AvailabilityZone
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     Identifier?: string|null,
     *     AvailabilityZone?: AvailabilityZone|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
