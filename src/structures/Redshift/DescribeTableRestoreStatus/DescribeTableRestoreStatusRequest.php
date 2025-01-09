<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeTableRestoreStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $TableRestoreRequestId
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeTableRestoreStatusRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     TableRestoreRequestId?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
