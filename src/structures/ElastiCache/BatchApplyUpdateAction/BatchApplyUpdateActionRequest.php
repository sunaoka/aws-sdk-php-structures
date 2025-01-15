<?php

namespace Sunaoka\Aws\Structures\ElastiCache\BatchApplyUpdateAction;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $ReplicationGroupIds
 * @property list<string>|null $CacheClusterIds
 * @property string $ServiceUpdateName
 */
class BatchApplyUpdateActionRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupIds?: list<string>|null,
     *     CacheClusterIds?: list<string>|null,
     *     ServiceUpdateName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
