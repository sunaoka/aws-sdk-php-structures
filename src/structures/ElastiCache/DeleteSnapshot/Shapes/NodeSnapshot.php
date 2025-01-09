<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CacheClusterId
 * @property string $NodeGroupId
 * @property string $CacheNodeId
 * @property NodeGroupConfiguration $NodeGroupConfiguration
 * @property string $CacheSize
 * @property \Aws\Api\DateTimeResult $CacheNodeCreateTime
 * @property \Aws\Api\DateTimeResult $SnapshotCreateTime
 */
class NodeSnapshot extends Shape
{
    /**
     * @param array{
     *     CacheClusterId?: string,
     *     NodeGroupId?: string,
     *     CacheNodeId?: string,
     *     NodeGroupConfiguration?: NodeGroupConfiguration,
     *     CacheSize?: string,
     *     CacheNodeCreateTime?: \Aws\Api\DateTimeResult,
     *     SnapshotCreateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
