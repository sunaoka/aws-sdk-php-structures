<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeReservedNodes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservationId
 * @property string|null $ReservedNodesOfferingId
 * @property string|null $NodeType
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property int|null $Duration
 * @property double|null $FixedPrice
 * @property int|null $NodeCount
 * @property string|null $OfferingType
 * @property string|null $State
 * @property list<RecurringCharge>|null $RecurringCharges
 * @property string|null $ARN
 */
class ReservedNode extends Shape
{
    /**
     * @param array{
     *     ReservationId?: string|null,
     *     ReservedNodesOfferingId?: string|null,
     *     NodeType?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Duration?: int|null,
     *     FixedPrice?: double|null,
     *     NodeCount?: int|null,
     *     OfferingType?: string|null,
     *     State?: string|null,
     *     RecurringCharges?: list<RecurringCharge>|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
