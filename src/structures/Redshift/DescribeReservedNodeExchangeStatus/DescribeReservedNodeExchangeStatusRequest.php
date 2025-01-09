<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeReservedNodeExchangeStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReservedNodeId
 * @property string $ReservedNodeExchangeRequestId
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeReservedNodeExchangeStatusRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodeId?: string,
     *     ReservedNodeExchangeRequestId?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
