<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheSubnetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CacheSubnetGroupName
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeCacheSubnetGroupsRequest extends Request
{
    /**
     * @param array{
     *     CacheSubnetGroupName?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
