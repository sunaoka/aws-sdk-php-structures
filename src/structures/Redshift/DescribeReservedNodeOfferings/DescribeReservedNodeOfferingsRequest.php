<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeReservedNodeOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedNodeOfferingId
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeReservedNodeOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodeOfferingId?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
