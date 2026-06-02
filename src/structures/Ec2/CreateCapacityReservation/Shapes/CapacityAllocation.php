<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'used'|'future'|'cancelling'|null $AllocationType
 * @property int|null $Count
 * @property list<CapacityAllocationMetadataEntry>|null $AllocationMetadata
 */
class CapacityAllocation extends Shape
{
    /**
     * @param array{
     *     AllocationType?: 'used'|'future'|'cancelling'|null,
     *     Count?: int|null,
     *     AllocationMetadata?: list<CapacityAllocationMetadataEntry>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
