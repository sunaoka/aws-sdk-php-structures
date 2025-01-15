<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property string $GameServerId
 * @property string|null $GameServerData
 * @property 'AVAILABLE'|'UTILIZED'|null $UtilizationStatus
 * @property 'HEALTHY'|null $HealthCheck
 */
class UpdateGameServerRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     GameServerId: string,
     *     GameServerData?: string|null,
     *     UtilizationStatus?: 'AVAILABLE'|'UTILIZED'|null,
     *     HealthCheck?: 'HEALTHY'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
