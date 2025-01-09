<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DeleteGlobalReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalReplicationGroupId
 * @property bool $RetainPrimaryReplicationGroup
 */
class DeleteGlobalReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     GlobalReplicationGroupId: string,
     *     RetainPrimaryReplicationGroup: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
