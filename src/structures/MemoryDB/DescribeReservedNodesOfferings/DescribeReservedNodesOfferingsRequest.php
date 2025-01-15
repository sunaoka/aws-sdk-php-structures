<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeReservedNodesOfferings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedNodesOfferingId
 * @property string|null $NodeType
 * @property string|null $Duration
 * @property string|null $OfferingType
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeReservedNodesOfferingsRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodesOfferingId?: string|null,
     *     NodeType?: string|null,
     *     Duration?: string|null,
     *     OfferingType?: string|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
