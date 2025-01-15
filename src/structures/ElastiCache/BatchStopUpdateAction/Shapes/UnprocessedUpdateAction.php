<?php

namespace Sunaoka\Aws\Structures\ElastiCache\BatchStopUpdateAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationGroupId
 * @property string|null $CacheClusterId
 * @property string|null $ServiceUpdateName
 * @property string|null $ErrorType
 * @property string|null $ErrorMessage
 */
class UnprocessedUpdateAction extends Shape
{
    /**
     * @param array{
     *     ReplicationGroupId?: string|null,
     *     CacheClusterId?: string|null,
     *     ServiceUpdateName?: string|null,
     *     ErrorType?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
