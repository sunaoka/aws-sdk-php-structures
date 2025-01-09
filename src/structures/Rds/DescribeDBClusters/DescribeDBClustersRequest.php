<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeDBClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterIdentifier
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 * @property bool $IncludeShared
 */
class DescribeDBClustersRequest extends Request
{
    /**
     * @param array{
     *     DBClusterIdentifier?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     IncludeShared?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
