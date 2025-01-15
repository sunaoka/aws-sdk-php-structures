<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeReservedNodeExchangeStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ReservedNodeId
 * @property string|null $ReservedNodeExchangeRequestId
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeReservedNodeExchangeStatusRequest extends Request
{
    /**
     * @param array{
     *     ReservedNodeId?: string|null,
     *     ReservedNodeExchangeRequestId?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
