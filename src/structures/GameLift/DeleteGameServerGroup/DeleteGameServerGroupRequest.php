<?php

namespace Sunaoka\Aws\Structures\GameLift\DeleteGameServerGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property 'SAFE_DELETE'|'FORCE_DELETE'|'RETAIN' $DeleteOption
 */
class DeleteGameServerGroupRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     DeleteOption?: 'SAFE_DELETE'|'FORCE_DELETE'|'RETAIN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
