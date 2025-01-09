<?php

namespace Sunaoka\Aws\Structures\ElastiCache\PurchaseReservedCacheNodesOffering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservedCacheNodeId
 * @property string $ReservedCacheNodesOfferingId
 * @property string $CacheNodeType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property int $Duration
 * @property double $FixedPrice
 * @property double $UsagePrice
 * @property int $CacheNodeCount
 * @property string $ProductDescription
 * @property string $OfferingType
 * @property string $State
 * @property list<RecurringCharge> $RecurringCharges
 * @property string $ReservationARN
 */
class ReservedCacheNode extends Shape
{
    /**
     * @param array{
     *     ReservedCacheNodeId?: string,
     *     ReservedCacheNodesOfferingId?: string,
     *     CacheNodeType?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     Duration?: int,
     *     FixedPrice?: double,
     *     UsagePrice?: double,
     *     CacheNodeCount?: int,
     *     ProductDescription?: string,
     *     OfferingType?: string,
     *     State?: string,
     *     RecurringCharges?: list<RecurringCharge>,
     *     ReservationARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
