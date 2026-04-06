<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityBlockId
 * @property 'ok'|'impaired'|'insufficient-data'|null $InterconnectStatus
 * @property int|null $TotalCapacity
 * @property int|null $TotalAvailableCapacity
 * @property int|null $TotalUnavailableCapacity
 * @property list<CapacityReservationStatus>|null $CapacityReservationStatuses
 */
class CapacityBlockStatus extends Shape
{
    /**
     * @param array{
     *     CapacityBlockId?: string|null,
     *     InterconnectStatus?: 'ok'|'impaired'|'insufficient-data'|null,
     *     TotalCapacity?: int|null,
     *     TotalAvailableCapacity?: int|null,
     *     TotalUnavailableCapacity?: int|null,
     *     CapacityReservationStatuses?: list<CapacityReservationStatus>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
