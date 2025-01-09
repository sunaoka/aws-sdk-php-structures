<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeReservedNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservationId
 * @property string $ReservedNodesOfferingId
 * @property string $NodeType
 * @property string $Duration
 * @property string $OfferingType
 * @property int $MaxResults
 * @property string $NextToken
 */
class DescribeReservedNodesRequest extends Request
{
    /**
     * @param array{
     *     ReservationId?: string,
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
