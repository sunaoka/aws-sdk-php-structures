<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeReservedInstanceOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedInstanceOfferingId
 * @property int<min, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeReservedInstanceOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedInstanceOfferingId?: string|null,
     *     MaxResults?: int<min, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
