<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeGlobalClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GlobalClusterIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeGlobalClustersRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier?: string|null,
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
