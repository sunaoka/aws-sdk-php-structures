<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterVersion
 * @property string $ClusterParameterGroupFamily
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeClusterVersionsRequest extends Request
{
    /**
     * @param array{
     *     ClusterVersion?: string,
     *     ClusterParameterGroupFamily?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
