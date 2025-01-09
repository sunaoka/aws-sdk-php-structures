<?php

namespace Sunaoka\Aws\Structures\ElastiCache\FailoverGlobalReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalReplicationGroupId
 * @property string $PrimaryRegion
 * @property string $PrimaryReplicationGroupId
 */
class FailoverGlobalReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     GlobalReplicationGroupId: string,
     *     PrimaryRegion: string,
     *     PrimaryReplicationGroupId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
