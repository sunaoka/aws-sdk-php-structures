<?php

namespace Sunaoka\Aws\Structures\Redshift\GetReservedNodeExchangeOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservedNodeOfferingId
 * @property string|null $NodeType
 * @property int|null $Duration
 * @property double|null $FixedPrice
 * @property double|null $UsagePrice
 * @property string|null $CurrencyCode
 * @property string|null $OfferingType
 * @property list<RecurringCharge>|null $RecurringCharges
 * @property 'Regular'|'Upgradable'|null $ReservedNodeOfferingType
 */
class ReservedNodeOffering extends Shape
{
    /**
     * @param array{
     *     ReservedNodeOfferingId?: string|null,
     *     NodeType?: string|null,
     *     Duration?: int|null,
     *     FixedPrice?: double|null,
     *     UsagePrice?: double|null,
     *     CurrencyCode?: string|null,
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
