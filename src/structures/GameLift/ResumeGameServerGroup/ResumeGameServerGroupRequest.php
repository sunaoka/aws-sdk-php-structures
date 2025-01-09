<?php

namespace Sunaoka\Aws\Structures\GameLift\ResumeGameServerGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property list<'REPLACE_INSTANCE_TYPES'> $ResumeActions
 */
class ResumeGameServerGroupRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     ResumeActions: list<'REPLACE_INSTANCE_TYPES'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
