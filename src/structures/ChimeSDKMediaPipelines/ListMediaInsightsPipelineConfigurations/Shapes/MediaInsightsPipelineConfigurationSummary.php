<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\ListMediaInsightsPipelineConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaInsightsPipelineConfigurationName
 * @property string $MediaInsightsPipelineConfigurationId
 * @property string $MediaInsightsPipelineConfigurationArn
 */
class MediaInsightsPipelineConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     MediaInsightsPipelineConfigurationName?: string,
     *     MediaInsightsPipelineConfigurationId?: string,
     *     MediaInsightsPipelineConfigurationArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
