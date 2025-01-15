<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReservedCacheNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservedCacheNodeId
 * @property string|null $ReservedCacheNodesOfferingId
 * @property string|null $CacheNodeType
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property int|null $Duration
 * @property double|null $FixedPrice
 * @property double|null $UsagePrice
 * @property int|null $CacheNodeCount
 * @property string|null $ProductDescription
 * @property string|null $OfferingType
 * @property string|null $State
 * @property list<RecurringCharge>|null $RecurringCharges
 * @property string|null $ReservationARN
 */
class ReservedCacheNode extends Shape
{
    /**
     * @param array{
     *     ReservedCacheNodeId?: string|null,
     *     ReservedCacheNodesOfferingId?: string|null,
     *     CacheNodeType?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Duration?: int|null,
     *     FixedPrice?: double|null,
     *     UsagePrice?: double|null,
     *     CacheNodeCount?: int|null,
     *     ProductDescription?: string|null,
     *     OfferingType?: string|null,
     *     State?: string|null,
     *     RecurringCharges?: list<RecurringCharge>|null,
     *     ReservationARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
