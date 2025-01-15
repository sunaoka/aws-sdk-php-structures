<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeReservedNodes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedNodeId
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeReservedNodesRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodeId?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
