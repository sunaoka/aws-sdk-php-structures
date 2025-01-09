<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReservedCacheNodesOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservedCacheNodesOfferingId
 * @property string $CacheNodeType
 * @property int $Duration
 * @property double $FixedPrice
 * @property double $UsagePrice
 * @property string $ProductDescription
 * @property string $OfferingType
 * @property list<RecurringCharge> $RecurringCharges
 */
class ReservedCacheNodesOffering extends Shape
{
    /**
     * @param array{
     *     ReservedCacheNodesOfferingId?: string,
     *     CacheNodeType?: string,
     *     Duration?: int,
     *     FixedPrice?: double,
     *     UsagePrice?: double,
     *     ProductDescription?: string,
     *     OfferingType?: string,
     *     RecurringCharges?: list<RecurringCharge>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
