<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeReservedNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservationId
 * @property string|null $ReservedNodesOfferingId
 * @property string|null $NodeType
 * @property string|null $Duration
 * @property string|null $OfferingType
 * @property int|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeReservedNodesRequest extends Request
{
    /**
     * @param array{
     *     ReservationId?: string|null,
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
