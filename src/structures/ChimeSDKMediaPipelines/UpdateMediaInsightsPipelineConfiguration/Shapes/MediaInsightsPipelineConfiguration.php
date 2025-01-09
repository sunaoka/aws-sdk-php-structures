<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MediaInsightsPipelineConfigurationName
 * @property string $MediaInsightsPipelineConfigurationArn
 * @property string $ResourceAccessRoleArn
 * @property RealTimeAlertConfiguration $RealTimeAlertConfiguration
 * @property list<MediaInsightsPipelineConfigurationElement> $Elements
 * @property string $MediaInsightsPipelineConfigurationId
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $UpdatedTimestamp
 */
class MediaInsightsPipelineConfiguration extends Shape
{
    /**
     * @param array{
     *     MediaInsightsPipelineConfigurationName?: string,
     *     MediaInsightsPipelineConfigurationArn?: string,
     *     ResourceAccessRoleArn?: string,
     *     RealTimeAlertConfiguration?: RealTimeAlertConfiguration,
     *     Elements?: list<MediaInsightsPipelineConfigurationElement>,
     *     MediaInsightsPipelineConfigurationId?: string,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
