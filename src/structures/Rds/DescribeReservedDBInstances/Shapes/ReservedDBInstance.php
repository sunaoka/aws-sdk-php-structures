<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeReservedDBInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReservedDBInstanceId
 * @property string|null $ReservedDBInstancesOfferingId
 * @property string|null $DBInstanceClass
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property int|null $Duration
 * @property double|null $FixedPrice
 * @property double|null $UsagePrice
 * @property string|null $CurrencyCode
 * @property int|null $DBInstanceCount
 * @property string|null $ProductDescription
 * @property string|null $OfferingType
 * @property bool|null $MultiAZ
 * @property string|null $State
 * @property list<RecurringCharge>|null $RecurringCharges
 * @property string|null $ReservedDBInstanceArn
 * @property string|null $LeaseId
 */
class ReservedDBInstance extends Shape
{
    /**
     * @param array{
     *     ReservedDBInstanceId?: string|null,
     *     ReservedDBInstancesOfferingId?: string|null,
     *     DBInstanceClass?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     Duration?: int|null,
     *     FixedPrice?: double|null,
     *     UsagePrice?: double|null,
     *     CurrencyCode?: string|null,
     *     DBInstanceCount?: int|null,
     *     ProductDescription?: string|null,
     *     OfferingType?: string|null,
     *     MultiAZ?: bool|null,
     *     State?: string|null,
     *     RecurringCharges?: list<RecurringCharge>|null,
     *     ReservedDBInstanceArn?: string|null,
     *     LeaseId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
