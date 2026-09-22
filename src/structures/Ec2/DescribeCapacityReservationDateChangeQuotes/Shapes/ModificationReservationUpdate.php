<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationDateChangeQuotes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $NewCommitmentEndDate
 * @property \Aws\Api\DateTimeResult|null $NewStartDate
 * @property int|null $NewCommitmentDuration
 */
class ModificationReservationUpdate extends Shape
{
    /**
     * @param array{
     *     NewCommitmentEndDate?: \Aws\Api\DateTimeResult|null,
     *     NewStartDate?: \Aws\Api\DateTimeResult|null,
     *     NewCommitmentDuration?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
