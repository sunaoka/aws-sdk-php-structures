<?php

namespace Sunaoka\Aws\Structures\GameLift\UpdateGameServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GameServerGroupName
 * @property string $GameServerId
 * @property string $GameServerData
 * @property 'AVAILABLE'|'UTILIZED' $UtilizationStatus
 * @property 'HEALTHY' $HealthCheck
 */
class UpdateGameServerRequest extends Request
{
    /**
     * @param array{
     *     GameServerGroupName: string,
     *     GameServerId: string,
     *     GameServerData?: string,
     *     UtilizationStatus?: 'AVAILABLE'|'UTILIZED',
     *     HealthCheck?: 'HEALTHY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
