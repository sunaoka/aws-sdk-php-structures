<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterDbRevisions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeClusterDbRevisionsRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
