<?php

namespace Sunaoka\Aws\Structures\MemoryDB\PurchaseReservedNodesOffering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservationId
 * @property string $ReservedNodesOfferingId
 * @property string $NodeType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property int $Duration
 * @property double $FixedPrice
 * @property int $NodeCount
 * @property string $OfferingType
 * @property string $State
 * @property list<RecurringCharge> $RecurringCharges
 * @property string $ARN
 */
class ReservedNode extends Shape
{
    /**
     * @param array{
     *     ReservationId?: string,
     *     ReservedNodesOfferingId?: string,
     *     NodeType?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     Duration?: int,
     *     FixedPrice?: double,
     *     NodeCount?: int,
     *     OfferingType?: string,
     *     State?: string,
     *     RecurringCharges?: list<RecurringCharge>,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
