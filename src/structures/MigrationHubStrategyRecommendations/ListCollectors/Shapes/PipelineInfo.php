<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $pipelineConfigurationTimeStamp
 * @property 'AZURE_DEVOPS' $pipelineType
 */
class PipelineInfo extends Shape
{
    /**
     * @param array{
     *     pipelineConfigurationTimeStamp?: string,
     *     pipelineType?: 'AZURE_DEVOPS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
