<?php

namespace Sunaoka\Aws\Structures\ElastiCache\BatchApplyUpdateAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicationGroupId
 * @property string|null $CacheClusterId
 * @property string|null $ServiceUpdateName
 * @property 'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|'scheduling'|'scheduled'|'not-applicable'|null $UpdateActionStatus
 */
class ProcessedUpdateAction extends Shape
{
    /**
     * @param array{
     *     ReplicationGroupId?: string|null,
     *     CacheClusterId?: string|null,
     *     ServiceUpdateName?: string|null,
     *     UpdateActionStatus?: 'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|'scheduling'|'scheduled'|'not-applicable'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
