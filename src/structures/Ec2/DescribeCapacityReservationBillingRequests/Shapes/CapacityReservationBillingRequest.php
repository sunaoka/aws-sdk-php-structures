<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationBillingRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CapacityReservationId
 * @property string|null $RequestedBy
 * @property string|null $UnusedReservationBillingOwnerId
 * @property \Aws\Api\DateTimeResult|null $LastUpdateTime
 * @property 'pending'|'accepted'|'rejected'|'cancelled'|'revoked'|'expired'|null $Status
 * @property string|null $StatusMessage
 * @property CapacityReservationInfo|null $CapacityReservationInfo
 */
class CapacityReservationBillingRequest extends Shape
{
    /**
     * @param array{
     *     CapacityReservationId?: string|null,
     *     RequestedBy?: string|null,
     *     UnusedReservationBillingOwnerId?: string|null,
     *     LastUpdateTime?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'pending'|'accepted'|'rejected'|'cancelled'|'revoked'|'expired'|null,
     *     StatusMessage?: string|null,
     *     CapacityReservationInfo?: CapacityReservationInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
