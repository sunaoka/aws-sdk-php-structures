<?php

namespace Sunaoka\Aws\Structures\Emr\DescribeJobFlows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AvailabilityZone
 * @property list<string> $AvailabilityZones
 */
class PlacementType extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string,
     *     AvailabilityZones?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
