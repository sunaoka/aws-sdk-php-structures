<?php

namespace Sunaoka\Aws\Structures\Athena\PutCapacityAssignmentConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CapacityReservationName
 * @property list<Shapes\CapacityAssignment> $CapacityAssignments
 */
class PutCapacityAssignmentConfigurationRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationName: string,
     *     CapacityAssignments: list<Shapes\CapacityAssignment>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
