<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MediaInsightsPipelineConfigurationName
 * @property string|null $MediaInsightsPipelineConfigurationArn
 * @property string|null $ResourceAccessRoleArn
 * @property RealTimeAlertConfiguration|null $RealTimeAlertConfiguration
 * @property list<MediaInsightsPipelineConfigurationElement>|null $Elements
 * @property string|null $MediaInsightsPipelineConfigurationId
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $UpdatedTimestamp
 */
class MediaInsightsPipelineConfiguration extends Shape
{
    /**
     * @param array{
     *     MediaInsightsPipelineConfigurationName?: string|null,
     *     MediaInsightsPipelineConfigurationArn?: string|null,
     *     ResourceAccessRoleArn?: string|null,
     *     RealTimeAlertConfiguration?: RealTimeAlertConfiguration|null,
     *     Elements?: list<MediaInsightsPipelineConfigurationElement>|null,
     *     MediaInsightsPipelineConfigurationId?: string|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     UpdatedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
