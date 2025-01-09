<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipelineConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MediaInsightsPipelineConfigurationName
 * @property string $ResourceAccessRoleArn
 * @property Shapes\RealTimeAlertConfiguration $RealTimeAlertConfiguration
 * @property list<Shapes\MediaInsightsPipelineConfigurationElement> $Elements
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientRequestToken
 */
class CreateMediaInsightsPipelineConfigurationRequest extends Request
{
    /**
     * @param array{
     *     MediaInsightsPipelineConfigurationName: string,
     *     ResourceAccessRoleArn: string,
     *     RealTimeAlertConfiguration?: Shapes\RealTimeAlertConfiguration,
     *     Elements: list<Shapes\MediaInsightsPipelineConfigurationElement>,
     *     Tags?: list<Shapes\Tag>,
     *     ClientRequestToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
