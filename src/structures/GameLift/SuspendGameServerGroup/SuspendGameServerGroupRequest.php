<?php

namespace Sunaoka\Aws\Structures\GameLift\SuspendGameServerGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property list<'REPLACE_INSTANCE_TYPES'> $SuspendActions
 */
class SuspendGameServerGroupRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     SuspendActions: list<'REPLACE_INSTANCE_TYPES'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
