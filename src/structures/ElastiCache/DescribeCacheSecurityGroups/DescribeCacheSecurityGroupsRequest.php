<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheSecurityGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheSecurityGroupName
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeCacheSecurityGroupsRequest extends Request
{
    /**
     * @param array{
     *     CacheSecurityGroupName?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
