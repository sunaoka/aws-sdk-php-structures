<?php

namespace Sunaoka\Aws\Structures\Ec2\CancelReservedInstancesListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientToken
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property list<InstanceCount>|null $InstanceCounts
 * @property list<PriceSchedule>|null $PriceSchedules
 * @property string|null $ReservedInstancesId
 * @property string|null $ReservedInstancesListingId
 * @property 'active'|'pending'|'cancelled'|'closed'|null $Status
 * @property string|null $StatusMessage
 * @property list<Tag>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $UpdateDate
 */
class ReservedInstancesListing extends Shape
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     InstanceCounts?: list<InstanceCount>|null,
     *     PriceSchedules?: list<PriceSchedule>|null,
     *     ReservedInstancesId?: string|null,
     *     ReservedInstancesListingId?: string|null,
     *     Status?: 'active'|'pending'|'cancelled'|'closed'|null,
     *     StatusMessage?: string|null,
     *     Tags?: list<Tag>|null,
     *     UpdateDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
