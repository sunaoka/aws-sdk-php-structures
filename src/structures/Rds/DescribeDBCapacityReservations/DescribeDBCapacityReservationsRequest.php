<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBCapacityReservations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBCapacityReservationIdentifier
 * @property string|null $Marker
 * @property int<20, 100>|null $MaxRecords
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeDBCapacityReservationsRequest extends Request
{
    /**
     * @param array{
     *     DBCapacityReservationIdentifier?: string|null,
     *     Marker?: string|null,
     *     MaxRecords?: int<20, 100>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
