<?php

namespace Sunaoka\Aws\Structures\Redshift\GetReservedNodeExchangeConfigurationOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservedNodeId
 * @property string $ReservedNodeOfferingId
 * @property string $NodeType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property int $Duration
 * @property double $FixedPrice
 * @property double $UsagePrice
 * @property string $CurrencyCode
 * @property int $NodeCount
 * @property string $State
 * @property string $OfferingType
 * @property list<RecurringCharge> $RecurringCharges
 * @property 'Regular'|'Upgradable' $ReservedNodeOfferingType
 */
class ReservedNode extends Shape
{
    /**
     * @param array{
     *     ReservedNodeId?: string,
     *     ReservedNodeOfferingId?: string,
     *     NodeType?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     Duration?: int,
     *     FixedPrice?: double,
     *     UsagePrice?: double,
     *     CurrencyCode?: string,
     *     NodeCount?: int,
     *     State?: string,
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
