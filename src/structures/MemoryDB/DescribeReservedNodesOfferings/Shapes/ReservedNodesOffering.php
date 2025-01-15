<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeReservedNodesOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservedNodesOfferingId
 * @property string|null $NodeType
 * @property int|null $Duration
 * @property double|null $FixedPrice
 * @property string|null $OfferingType
 * @property list<RecurringCharge>|null $RecurringCharges
 */
class ReservedNodesOffering extends Shape
{
    /**
     * @param array{
     *     ReservedNodesOfferingId?: string|null,
     *     NodeType?: string|null,
     *     Duration?: int|null,
     *     FixedPrice?: double|null,
     *     OfferingType?: string|null,
     *     RecurringCharges?: list<RecurringCharge>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
