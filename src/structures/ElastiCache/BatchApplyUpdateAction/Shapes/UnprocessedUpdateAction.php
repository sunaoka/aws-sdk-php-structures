<?php

namespace Sunaoka\Aws\Structures\ElastiCache\BatchApplyUpdateAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationGroupId
 * @property string $CacheClusterId
 * @property string $ServiceUpdateName
 * @property string $ErrorType
 * @property string $ErrorMessage
 */
class UnprocessedUpdateAction extends Shape
{
    /**
     * @param array{
     *     ReplicationGroupId?: string,
     *     CacheClusterId?: string,
     *     ServiceUpdateName?: string,
     *     ErrorType?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
