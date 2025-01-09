<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetServerStrategies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serverId
 */
class GetServerStrategiesRequest extends Request
{
    /**
     * @param array{serverId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
