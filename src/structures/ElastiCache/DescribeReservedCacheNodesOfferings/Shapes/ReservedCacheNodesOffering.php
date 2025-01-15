<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeReservedCacheNodesOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservedCacheNodesOfferingId
 * @property string|null $CacheNodeType
 * @property int|null $Duration
 * @property double|null $FixedPrice
 * @property double|null $UsagePrice
 * @property string|null $ProductDescription
 * @property string|null $OfferingType
 * @property list<RecurringCharge>|null $RecurringCharges
 */
class ReservedCacheNodesOffering extends Shape
{
    /**
     * @param array{
     *     ReservedCacheNodesOfferingId?: string|null,
     *     CacheNodeType?: string|null,
     *     Duration?: int|null,
     *     FixedPrice?: double|null,
     *     UsagePrice?: double|null,
     *     ProductDescription?: string|null,
     *     OfferingType?: string|null,
     *     RecurringCharges?: list<RecurringCharge>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
