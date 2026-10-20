<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CommittedCapacityPerAvailabilityZone
 * @property \Aws\Api\DateTimeResult|null $CommitmentEndDate
 */
class DBCapacityReservationCommitmentInfo extends Shape
{
    /**
     * @param array{
     *     CommittedCapacityPerAvailabilityZone?: int|null,
     *     CommitmentEndDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
