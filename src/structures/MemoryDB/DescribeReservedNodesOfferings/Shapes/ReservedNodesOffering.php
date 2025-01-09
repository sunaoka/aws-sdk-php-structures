<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeReservedNodesOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservedNodesOfferingId
 * @property string $NodeType
 * @property int $Duration
 * @property double $FixedPrice
 * @property string $OfferingType
 * @property list<RecurringCharge> $RecurringCharges
 */
class ReservedNodesOffering extends Shape
{
    /**
     * @param array{
     *     ReservedNodesOfferingId?: string,
     *     NodeType?: string,
     *     Duration?: int,
     *     FixedPrice?: double,
     *     OfferingType?: string,
     *     RecurringCharges?: list<RecurringCharge>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
