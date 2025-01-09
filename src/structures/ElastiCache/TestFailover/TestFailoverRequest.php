<?php

namespace Sunaoka\Aws\Structures\ElastiCache\TestFailover;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ReplicationGroupId
 * @property string $NodeGroupId
 */
class TestFailoverRequest extends Request
{
    /**
     * @param array{
     *     ReplicationGroupId: string,
     *     NodeGroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
