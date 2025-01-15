<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeReservedNodeOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedNodeOfferingId
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeReservedNodeOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodeOfferingId?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
