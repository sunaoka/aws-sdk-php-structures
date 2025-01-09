<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeReservedNodesOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedNodesOfferingId
 * @property string $NodeType
 * @property string $Duration
 * @property string $OfferingType
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeReservedNodesOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodesOfferingId?: string,
     *     NodeType?: string,
     *     Duration?: string,
     *     OfferingType?: string,
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
