<?php

namespace Sunaoka\Aws\Structures\ElastiCache\BatchApplyUpdateAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplicationGroupId
 * @property string $CacheClusterId
 * @property string $ServiceUpdateName
 * @property 'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|'scheduling'|'scheduled'|'not-applicable' $UpdateActionStatus
 */
class ProcessedUpdateAction extends Shape
{
    /**
     * @param array{
     *     ReplicationGroupId?: string,
     *     CacheClusterId?: string,
     *     ServiceUpdateName?: string,
     *     UpdateActionStatus?: 'not-applied'|'waiting-to-start'|'in-progress'|'stopping'|'stopped'|'complete'|'scheduling'|'scheduled'|'not-applicable'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
