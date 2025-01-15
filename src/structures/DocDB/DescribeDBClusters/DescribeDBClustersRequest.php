<?php

namespace Sunaoka\Aws\Structures\DocDB\DescribeDBClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DBClusterIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeDBClustersRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
