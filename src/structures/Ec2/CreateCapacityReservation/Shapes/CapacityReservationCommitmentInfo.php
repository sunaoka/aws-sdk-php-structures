<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CommittedInstanceCount
 * @property \Aws\Api\DateTimeResult|null $CommitmentEndDate
 */
class CapacityReservationCommitmentInfo extends Shape
{
    /**
     * @param array{
     *     CommittedInstanceCount?: int|null,
     *     CommitmentEndDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
