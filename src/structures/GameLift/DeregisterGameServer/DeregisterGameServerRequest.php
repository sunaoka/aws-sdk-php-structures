<?php

namespace Sunaoka\Aws\Structures\GameLift\DeregisterGameServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property string $GameServerId
 */
class DeregisterGameServerRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     GameServerId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
