<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeReservedNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedNodeId
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeReservedNodesRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodeId?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
