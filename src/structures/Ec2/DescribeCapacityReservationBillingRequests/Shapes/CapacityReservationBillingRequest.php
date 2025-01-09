<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationBillingRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CapacityReservationId
 * @property string $RequestedBy
 * @property string $UnusedReservationBillingOwnerId
 * @property \Aws\Api\DateTimeResult $LastUpdateTime
 * @property 'pending'|'accepted'|'rejected'|'cancelled'|'revoked'|'expired' $Status
 * @property string $StatusMessage
 * @property CapacityReservationInfo $CapacityReservationInfo
 */
class CapacityReservationBillingRequest extends Shape
{
    /**
     * @param array{
     *     CapacityReservationId?: string,
     *     RequestedBy?: string,
     *     UnusedReservationBillingOwnerId?: string,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult,
     *     Status?: 'pending'|'accepted'|'rejected'|'cancelled'|'revoked'|'expired',
     *     StatusMessage?: string,
     *     CapacityReservationInfo?: CapacityReservationInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
