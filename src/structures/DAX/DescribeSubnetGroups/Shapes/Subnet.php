<?php

namespace Sunaoka\Aws\Structures\DAX\DescribeSubnetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetIdentifier
 * @property string|null $SubnetAvailabilityZone
 */
class Subnet extends Shape
{
    /**
     * @param array{
     *     SubnetIdentifier?: string|null,
     *     SubnetAvailabilityZone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
