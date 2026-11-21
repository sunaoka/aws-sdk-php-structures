<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCapacityReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SMCapacityReservationArn
 * @property string $SMCapacityReservationId
 * @property string $Owner
 * @property 'Scheduled'|'Active'|'Expired' $Status
 * @property string $InstanceType
 * @property string|null $AvailabilityZone
 * @property string $AvailabilityZoneId
 * @property int<0, max> $TotalInstanceCount
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class CapacityReservationSummary extends Shape
{
    /**
     * @param array{
     *     SMCapacityReservationArn: string,
     *     SMCapacityReservationId: string,
     *     Owner: string,
     *     Status: 'Scheduled'|'Active'|'Expired',
     *     InstanceType: string,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId: string,
     *     TotalInstanceCount: int<0, max>,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     CreationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
