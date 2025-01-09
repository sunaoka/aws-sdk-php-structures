<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CacheSecurityGroupName
 * @property string $Status
 */
class CacheSecurityGroupMembership extends Shape
{
    /**
     * @param array{
     *     CacheSecurityGroupName?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
