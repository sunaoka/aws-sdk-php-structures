<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeReservedDBInstances;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedDBInstanceId
 * @property string $ReservedDBInstancesOfferingId
 * @property string $DBInstanceClass
 * @property string $Duration
 * @property string $ProductDescription
 * @property string $OfferingType
 * @property bool $MultiAZ
 * @property string $LeaseId
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeReservedDBInstancesRequest extends Request
{
    /**
     * @param array{
     *     ReservedDBInstanceId?: string,
     *     ReservedDBInstancesOfferingId?: string,
     *     DBInstanceClass?: string,
     *     Duration?: string,
     *     ProductDescription?: string,
     *     OfferingType?: string,
     *     MultiAZ?: bool,
     *     LeaseId?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
