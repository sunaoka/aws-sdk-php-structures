<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheParameterGroupName
 * @property string|null $ParameterApplyStatus
 * @property list<string>|null $CacheNodeIdsToReboot
 */
class CacheParameterGroupStatus extends Shape
{
    /**
     * @param array{
     *     CacheParameterGroupName?: string|null,
     *     ParameterApplyStatus?: string|null,
     *     CacheNodeIdsToReboot?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
