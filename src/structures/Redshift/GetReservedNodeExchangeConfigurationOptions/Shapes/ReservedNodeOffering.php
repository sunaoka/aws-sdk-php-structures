<?php

namespace Sunaoka\Aws\Structures\Redshift\GetReservedNodeExchangeConfigurationOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservedNodeOfferingId
 * @property string $NodeType
 * @property int $Duration
 * @property double $FixedPrice
 * @property double $UsagePrice
 * @property string $CurrencyCode
 * @property string $OfferingType
 * @property list<RecurringCharge> $RecurringCharges
 * @property 'Regular'|'Upgradable' $ReservedNodeOfferingType
 */
class ReservedNodeOffering extends Shape
{
    /**
     * @param array{
     *     ReservedNodeOfferingId?: string,
     *     NodeType?: string,
     *     Duration?: int,
     *     FixedPrice?: double,
     *     UsagePrice?: double,
     *     CurrencyCode?: string,
     *     OfferingType?: string,
     *     RecurringCharges?: list<RecurringCharge>,
     *     ReservedNodeOfferingType?: 'Regular'|'Upgradable'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
