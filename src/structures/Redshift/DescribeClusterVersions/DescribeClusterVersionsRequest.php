<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeClusterVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClusterVersion
 * @property string|null $ClusterParameterGroupFamily
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeClusterVersionsRequest extends Request
{
    /**
     * @param array{
     *     ClusterVersion?: string|null,
     *     ClusterParameterGroupFamily?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
