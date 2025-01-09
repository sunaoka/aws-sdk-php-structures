<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservationBySplitting\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CommittedInstanceCount
 * @property \Aws\Api\DateTimeResult $CommitmentEndDate
 */
class CapacityReservationCommitmentInfo extends Shape
{
    /**
     * @param array{
     *     CommittedInstanceCount?: int,
     *     CommitmentEndDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
