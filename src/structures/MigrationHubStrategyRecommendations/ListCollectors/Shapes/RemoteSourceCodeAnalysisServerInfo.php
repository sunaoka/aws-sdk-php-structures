<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $remoteSourceCodeAnalysisServerConfigurationTimestamp
 */
class RemoteSourceCodeAnalysisServerInfo extends Shape
{
    /**
     * @param array{remoteSourceCodeAnalysisServerConfigurationTimestamp?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
