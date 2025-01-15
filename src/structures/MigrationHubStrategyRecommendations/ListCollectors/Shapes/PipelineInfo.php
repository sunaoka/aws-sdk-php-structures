<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $pipelineConfigurationTimeStamp
 * @property 'AZURE_DEVOPS'|null $pipelineType
 */
class PipelineInfo extends Shape
{
    /**
     * @param array{
     *     pipelineConfigurationTimeStamp?: string|null,
     *     pipelineType?: 'AZURE_DEVOPS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
