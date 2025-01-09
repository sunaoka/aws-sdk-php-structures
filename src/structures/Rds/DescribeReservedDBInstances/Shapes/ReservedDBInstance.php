<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeReservedDBInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReservedDBInstanceId
 * @property string $ReservedDBInstancesOfferingId
 * @property string $DBInstanceClass
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property int $Duration
 * @property double $FixedPrice
 * @property double $UsagePrice
 * @property string $CurrencyCode
 * @property int $DBInstanceCount
 * @property string $ProductDescription
 * @property string $OfferingType
 * @property bool $MultiAZ
 * @property string $State
 * @property list<RecurringCharge> $RecurringCharges
 * @property string $ReservedDBInstanceArn
 * @property string $LeaseId
 */
class ReservedDBInstance extends Shape
{
    /**
     * @param array{
     *     ReservedDBInstanceId?: string,
     *     ReservedDBInstancesOfferingId?: string,
     *     DBInstanceClass?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     Duration?: int,
     *     FixedPrice?: double,
     *     UsagePrice?: double,
     *     CurrencyCode?: string,
     *     DBInstanceCount?: int,
     *     ProductDescription?: string,
     *     OfferingType?: string,
     *     MultiAZ?: bool,
     *     State?: string,
     *     RecurringCharges?: list<RecurringCharge>,
     *     ReservedDBInstanceArn?: string,
     *     LeaseId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
