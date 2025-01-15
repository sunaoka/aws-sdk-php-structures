<?php

namespace Sunaoka\Aws\Structures\Athena\GetCapacityAssignmentConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationName
 * @property list<CapacityAssignment>|null $CapacityAssignments
 */
class CapacityAssignmentConfiguration extends Shape
{
    /**
     * @param array{
     *     CapacityReservationName?: string|null,
     *     CapacityAssignments?: list<CapacityAssignment>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
