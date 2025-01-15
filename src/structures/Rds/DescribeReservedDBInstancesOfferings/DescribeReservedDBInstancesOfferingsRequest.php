<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeReservedDBInstancesOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedDBInstancesOfferingId
 * @property string|null $DBInstanceClass
 * @property string|null $Duration
 * @property string|null $ProductDescription
 * @property string|null $OfferingType
 * @property bool|null $MultiAZ
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeReservedDBInstancesOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedDBInstancesOfferingId?: string|null,
     *     DBInstanceClass?: string|null,
     *     Duration?: string|null,
     *     ProductDescription?: string|null,
     *     OfferingType?: string|null,
     *     MultiAZ?: bool|null,
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
