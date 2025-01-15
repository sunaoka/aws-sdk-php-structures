<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\UpdateServerConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serverId
 * @property Shapes\StrategyOption|null $strategyOption
 */
class UpdateServerConfigRequest extends Request
{
    /**
     * @param array{
     *     serverId: string,
     *     strategyOption?: Shapes\StrategyOption|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
