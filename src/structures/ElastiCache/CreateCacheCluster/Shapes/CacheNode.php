<?php

namespace Sunaoka\Aws\Structures\ElastiCache\CreateCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CacheNodeId
 * @property string $CacheNodeStatus
 * @property \Aws\Api\DateTimeResult $CacheNodeCreateTime
 * @property Endpoint $Endpoint
 * @property string $ParameterGroupStatus
 * @property string $SourceCacheNodeId
 * @property string $CustomerAvailabilityZone
 * @property string $CustomerOutpostArn
 */
class CacheNode extends Shape
{
    /**
     * @param array{
     *     CacheNodeId?: string,
     *     CacheNodeStatus?: string,
     *     CacheNodeCreateTime?: \Aws\Api\DateTimeResult,
     *     Endpoint?: Endpoint,
     *     ParameterGroupStatus?: string,
     *     SourceCacheNodeId?: string,
     *     CustomerAvailabilityZone?: string,
     *     CustomerOutpostArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
