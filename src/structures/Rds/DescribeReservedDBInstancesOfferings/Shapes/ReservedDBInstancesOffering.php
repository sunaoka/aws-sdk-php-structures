<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeReservedDBInstancesOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservedDBInstancesOfferingId
 * @property string|null $DBInstanceClass
 * @property int|null $Duration
 * @property double|null $FixedPrice
 * @property double|null $UsagePrice
 * @property string|null $CurrencyCode
 * @property string|null $ProductDescription
 * @property string|null $OfferingType
 * @property bool|null $MultiAZ
 * @property list<RecurringCharge>|null $RecurringCharges
 */
class ReservedDBInstancesOffering extends Shape
{
    /**
     * @param array{
     *     ReservedDBInstancesOfferingId?: string|null,
     *     DBInstanceClass?: string|null,
     *     Duration?: int|null,
     *     FixedPrice?: double|null,
     *     UsagePrice?: double|null,
     *     CurrencyCode?: string|null,
     *     ProductDescription?: string|null,
     *     OfferingType?: string|null,
     *     MultiAZ?: bool|null,
     *     RecurringCharges?: list<RecurringCharge>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
