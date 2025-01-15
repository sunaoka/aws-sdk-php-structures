<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeTableRestoreStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property string|null $TableRestoreRequestId
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeTableRestoreStatusRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     TableRestoreRequestId?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
