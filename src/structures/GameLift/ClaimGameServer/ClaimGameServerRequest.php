<?php

namespace Sunaoka\Aws\Structures\GameLift\ClaimGameServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property string|null $GameServerId
 * @property string|null $GameServerData
 * @property Shapes\ClaimFilterOption|null $FilterOption
 */
class ClaimGameServerRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     GameServerId?: string|null,
     *     GameServerData?: string|null,
     *     FilterOption?: Shapes\ClaimFilterOption|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
