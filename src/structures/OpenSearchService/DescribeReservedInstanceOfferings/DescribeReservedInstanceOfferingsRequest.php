<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeReservedInstanceOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedInstanceOfferingId
 * @property int<min, 100> $MaxResults
 * @property string $NextToken
 */
class DescribeReservedInstanceOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedInstanceOfferingId?: string,
     *     MaxResults?: int<min, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
