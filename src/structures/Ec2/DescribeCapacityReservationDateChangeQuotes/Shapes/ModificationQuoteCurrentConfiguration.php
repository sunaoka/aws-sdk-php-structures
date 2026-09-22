<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationDateChangeQuotes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $InstanceCount
 * @property string|null $ReservationState
 * @property \Aws\Api\DateTimeResult|null $StartDate
 * @property \Aws\Api\DateTimeResult|null $OriginalStartDate
 */
class ModificationQuoteCurrentConfiguration extends Shape
{
    /**
     * @param array{
     *     InstanceCount?: int|null,
     *     ReservationState?: string|null,
     *     StartDate?: \Aws\Api\DateTimeResult|null,
     *     OriginalStartDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
