<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheSubnetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheSubnetGroupName
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeCacheSubnetGroupsRequest extends Request
{
    /**
     * @param array{
     *     CacheSubnetGroupName?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
