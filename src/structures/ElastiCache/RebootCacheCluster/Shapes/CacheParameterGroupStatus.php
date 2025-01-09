<?php

namespace Sunaoka\Aws\Structures\ElastiCache\RebootCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CacheParameterGroupName
 * @property string $ParameterApplyStatus
 * @property list<string> $CacheNodeIdsToReboot
 */
class CacheParameterGroupStatus extends Shape
{
    /**
     * @param array{
     *     CacheParameterGroupName?: string,
     *     ParameterApplyStatus?: string,
     *     CacheNodeIdsToReboot?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
