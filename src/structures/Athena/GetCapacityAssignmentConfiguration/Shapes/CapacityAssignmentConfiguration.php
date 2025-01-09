<?php

namespace Sunaoka\Aws\Structures\Athena\GetCapacityAssignmentConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityReservationName
 * @property list<CapacityAssignment> $CapacityAssignments
 */
class CapacityAssignmentConfiguration extends Shape
{
    /**
     * @param array{
     *     CapacityReservationName?: string,
     *     CapacityAssignments?: list<CapacityAssignment>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
