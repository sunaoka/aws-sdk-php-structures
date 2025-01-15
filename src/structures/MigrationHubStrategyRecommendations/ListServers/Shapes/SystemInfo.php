<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cpuArchitecture
 * @property string|null $fileSystemType
 * @property list<NetworkInfo>|null $networkInfoList
 * @property OSInfo|null $osInfo
 */
class SystemInfo extends Shape
{
    /**
     * @param array{
     *     cpuArchitecture?: string|null,
     *     fileSystemType?: string|null,
     *     networkInfoList?: list<NetworkInfo>|null,
     *     osInfo?: OSInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
