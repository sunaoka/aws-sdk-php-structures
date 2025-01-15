<?php

namespace Sunaoka\Aws\Structures\Redshift\AcceptReservedNodeExchange\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservedNodeId
 * @property string|null $ReservedNodeOfferingId
 * @property string|null $NodeType
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property int|null $Duration
 * @property double|null $FixedPrice
 * @property double|null $UsagePrice
 * @property string|null $CurrencyCode
 * @property int|null $NodeCount
 * @property string|null $State
 * @property string|null $OfferingType
 * @property list<RecurringCharge>|null $RecurringCharges
 * @property 'Regular'|'Upgradable'|null $ReservedNodeOfferingType
 */
class ReservedNode extends Shape
{
    /**
     * @param array{
     *     ReservedNodeId?: string|null,
     *     ReservedNodeOfferingId?: string|null,
     *     NodeType?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Duration?: int|null,
     *     FixedPrice?: double|null,
     *     UsagePrice?: double|null,
     *     CurrencyCode?: string|null,
     *     NodeCount?: int|null,
     *     State?: string|null,
     *     OfferingType?: string|null,
     *     RecurringCharges?: list<RecurringCharge>|null,
     *     ReservedNodeOfferingType?: 'Regular'|'Upgradable'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
