<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $interfaceName
 * @property string $ipAddress
 * @property string $macAddress
 * @property string $netMask
 */
class NetworkInfo extends Shape
{
    /**
     * @param array{
     *     interfaceName: string,
     *     ipAddress: string,
     *     macAddress: string,
     *     netMask: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
