<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeReservedDBInstancesOfferings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservedDBInstancesOfferingId
 * @property string $DBInstanceClass
 * @property int $Duration
 * @property double $FixedPrice
 * @property double $UsagePrice
 * @property string $CurrencyCode
 * @property string $ProductDescription
 * @property string $OfferingType
 * @property bool $MultiAZ
 * @property list<RecurringCharge> $RecurringCharges
 */
class ReservedDBInstancesOffering extends Shape
{
    /**
     * @param array{
     *     ReservedDBInstancesOfferingId?: string,
     *     DBInstanceClass?: string,
     *     Duration?: int,
     *     FixedPrice?: double,
     *     UsagePrice?: double,
     *     CurrencyCode?: string,
     *     ProductDescription?: string,
     *     OfferingType?: string,
     *     MultiAZ?: bool,
     *     RecurringCharges?: list<RecurringCharge>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
