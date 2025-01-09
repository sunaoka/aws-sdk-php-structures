<?php

namespace Sunaoka\Aws\Structures\GameLift\ClaimGameServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property string $GameServerId
 * @property string $GameServerData
 * @property Shapes\ClaimFilterOption $FilterOption
 */
class ClaimGameServerRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     GameServerId?: string,
     *     GameServerData?: string,
     *     FilterOption?: Shapes\ClaimFilterOption
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
