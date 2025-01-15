<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheNodeId
 * @property string|null $CacheNodeStatus
 * @property \Aws\Api\DateTimeResult|null $CacheNodeCreateTime
 * @property Endpoint|null $Endpoint
 * @property string|null $ParameterGroupStatus
 * @property string|null $SourceCacheNodeId
 * @property string|null $CustomerAvailabilityZone
 * @property string|null $CustomerOutpostArn
 */
class CacheNode extends Shape
{
    /**
     * @param array{
     *     CacheNodeId?: string|null,
     *     CacheNodeStatus?: string|null,
     *     CacheNodeCreateTime?: \Aws\Api\DateTimeResult|null,
     *     Endpoint?: Endpoint|null,
     *     ParameterGroupStatus?: string|null,
     *     SourceCacheNodeId?: string|null,
     *     CustomerAvailabilityZone?: string|null,
     *     CustomerOutpostArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
