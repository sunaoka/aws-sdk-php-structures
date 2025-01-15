<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeSnapshots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheClusterId
 * @property string|null $NodeGroupId
 * @property string|null $CacheNodeId
 * @property NodeGroupConfiguration|null $NodeGroupConfiguration
 * @property string|null $CacheSize
 * @property \Aws\Api\DateTimeResult|null $CacheNodeCreateTime
 * @property \Aws\Api\DateTimeResult|null $SnapshotCreateTime
 */
class NodeSnapshot extends Shape
{
    /**
     * @param array{
     *     CacheClusterId?: string|null,
     *     NodeGroupId?: string|null,
     *     CacheNodeId?: string|null,
     *     NodeGroupConfiguration?: NodeGroupConfiguration|null,
     *     CacheSize?: string|null,
     *     CacheNodeCreateTime?: \Aws\Api\DateTimeResult|null,
     *     SnapshotCreateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
