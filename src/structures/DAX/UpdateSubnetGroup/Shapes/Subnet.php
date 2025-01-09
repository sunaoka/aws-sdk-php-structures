<?php

namespace Sunaoka\Aws\Structures\DAX\UpdateSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetIdentifier
 * @property string $SubnetAvailabilityZone
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     SubnetIdentifier?: string,
     *     SubnetAvailabilityZone?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
