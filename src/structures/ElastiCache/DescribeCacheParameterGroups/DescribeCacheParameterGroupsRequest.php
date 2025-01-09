<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheParameterGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheParameterGroupName
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeCacheParameterGroupsRequest extends Request
{
    /**
     * @param array{
     *     CacheParameterGroupName?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
