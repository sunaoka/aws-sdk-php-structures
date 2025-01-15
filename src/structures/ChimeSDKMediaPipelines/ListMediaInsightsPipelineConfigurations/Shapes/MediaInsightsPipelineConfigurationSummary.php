<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\ListMediaInsightsPipelineConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MediaInsightsPipelineConfigurationName
 * @property string|null $MediaInsightsPipelineConfigurationId
 * @property string|null $MediaInsightsPipelineConfigurationArn
 */
class MediaInsightsPipelineConfigurationSummary extends Shape
{
    /**
     * @param array{
     *     MediaInsightsPipelineConfigurationName?: string|null,
     *     MediaInsightsPipelineConfigurationId?: string|null,
     *     MediaInsightsPipelineConfigurationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
