<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateReservedInstancesListing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientToken
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property list<InstanceCount> $InstanceCounts
 * @property list<PriceSchedule> $PriceSchedules
 * @property string $ReservedInstancesId
 * @property string $ReservedInstancesListingId
 * @property 'active'|'pending'|'cancelled'|'closed' $Status
 * @property string $StatusMessage
 * @property list<Tag> $Tags
 * @property \Aws\Api\DateTimeResult $UpdateDate
 */
class ReservedInstancesListing extends Shape
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     InstanceCounts?: list<InstanceCount>,
     *     PriceSchedules?: list<PriceSchedule>,
     *     ReservedInstancesId?: string,
     *     ReservedInstancesListingId?: string,
     *     Status?: 'active'|'pending'|'cancelled'|'closed',
     *     StatusMessage?: string,
     *     Tags?: list<Tag>,
     *     UpdateDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
