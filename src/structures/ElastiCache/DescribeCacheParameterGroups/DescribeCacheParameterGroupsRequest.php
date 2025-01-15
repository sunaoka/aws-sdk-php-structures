<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheParameterGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CacheParameterGroupName
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeCacheParameterGroupsRequest extends Request
{
    /**
     * @param array{
     *     CacheParameterGroupName?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
