<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $EndDate
 * @property \Aws\Api\DateTimeResult|null $CommitmentEndDate
 * @property string|null $EndDateType
 * @property int|null $CommitmentDuration
 */
class CapacityReservationAdjustmentDetails extends Shape
{
    /**
     * @param array{
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     EndDate?: \Aws\Api\DateTimeResult|null,
     *     CommitmentEndDate?: \Aws\Api\DateTimeResult|null,
     *     EndDateType?: string|null,
     *     CommitmentDuration?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
