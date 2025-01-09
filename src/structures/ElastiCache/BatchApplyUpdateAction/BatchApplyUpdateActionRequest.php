<?php

namespace Sunaoka\Aws\Structures\ElastiCache\BatchApplyUpdateAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ReplicationGroupIds
 * @property list<string> $CacheClusterIds
 * @property string $ServiceUpdateName
 */
class BatchApplyUpdateActionRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupIds?: list<string>,
     *     CacheClusterIds?: list<string>,
     *     ServiceUpdateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
