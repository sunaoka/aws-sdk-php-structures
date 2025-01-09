<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeReservedDBInstancesOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedDBInstancesOfferingId
 * @property string $DBInstanceClass
 * @property string $Duration
 * @property string $ProductDescription
 * @property string $OfferingType
 * @property bool $MultiAZ
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeReservedDBInstancesOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedDBInstancesOfferingId?: string,
     *     DBInstanceClass?: string,
     *     Duration?: string,
     *     ProductDescription?: string,
     *     OfferingType?: string,
     *     MultiAZ?: bool,
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
