<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeReservedDBInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedDBInstanceId
 * @property string|null $ReservedDBInstancesOfferingId
 * @property string|null $DBInstanceClass
 * @property string|null $Duration
 * @property string|null $ProductDescription
 * @property string|null $OfferingType
 * @property bool|null $MultiAZ
 * @property string|null $LeaseId
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeReservedDBInstancesRequest extends Request
{
    /**
     * @param array{
     *     ReservedDBInstanceId?: string|null,
     *     ReservedDBInstancesOfferingId?: string|null,
     *     DBInstanceClass?: string|null,
     *     Duration?: string|null,
     *     ProductDescription?: string|null,
     *     OfferingType?: string|null,
     *     MultiAZ?: bool|null,
     *     LeaseId?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
