<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeGlobalClusters;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $GlobalClusterIdentifier
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeGlobalClustersRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
