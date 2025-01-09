<?php

namespace Sunaoka\Aws\Structures\ElastiCache\RebootCacheCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicArn
 * @property string $TopicStatus
 */
class NotificationConfiguration extends Shape
{
    /**
     * @param array{
     *     TopicArn?: string,
     *     TopicStatus?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
