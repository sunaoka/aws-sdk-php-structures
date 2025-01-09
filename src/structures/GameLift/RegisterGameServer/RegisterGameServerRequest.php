<?php

namespace Sunaoka\Aws\Structures\GameLift\RegisterGameServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property string $GameServerId
 * @property string $InstanceId
 * @property string $ConnectionInfo
 * @property string $GameServerData
 */
class RegisterGameServerRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     GameServerId: string,
     *     InstanceId: string,
     *     ConnectionInfo?: string,
     *     GameServerData?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
