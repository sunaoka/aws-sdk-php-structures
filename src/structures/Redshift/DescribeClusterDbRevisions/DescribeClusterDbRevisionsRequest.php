<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterDbRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterIdentifier
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeClusterDbRevisionsRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
