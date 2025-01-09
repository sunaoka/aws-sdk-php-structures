<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cpuArchitecture
 * @property string $fileSystemType
 * @property list<NetworkInfo> $networkInfoList
 * @property OSInfo $osInfo
 */
class SystemInfo extends Shape
{
    /**
     * @param array{
     *     cpuArchitecture?: string,
     *     fileSystemType?: string,
     *     networkInfoList?: list<NetworkInfo>,
     *     osInfo?: OSInfo
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
