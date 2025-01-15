<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $CacheSecurityGroupName
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeCacheSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     CacheSecurityGroupName?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
