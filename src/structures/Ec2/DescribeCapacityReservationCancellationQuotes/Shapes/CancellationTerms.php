<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationCancellationQuotes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'commitment-wind-down'|null $CancellationType
 * @property string|null $ReservationState
 * @property int|null $CommittedInstanceCount
 * @property int|null $ChargeCommitmentDurationHours
 * @property \Aws\Api\DateTimeResult|null $ChargeEndDate
 */
class CancellationTerms extends Shape
{
    /**
     * @param array{
     *     CancellationType?: 'commitment-wind-down'|null,
     *     ReservationState?: string|null,
     *     CommittedInstanceCount?: int|null,
     *     ChargeCommitmentDurationHours?: int|null,
     *     ChargeEndDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
