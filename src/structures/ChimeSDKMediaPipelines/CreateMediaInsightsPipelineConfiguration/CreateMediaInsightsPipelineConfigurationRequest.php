<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipelineConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MediaInsightsPipelineConfigurationName
 * @property string $ResourceAccessRoleArn
 * @property Shapes\RealTimeAlertConfiguration|null $RealTimeAlertConfiguration
 * @property list<Shapes\MediaInsightsPipelineConfigurationElement> $Elements
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientRequestToken
 */
class CreateMediaInsightsPipelineConfigurationRequest extends Request
{
    /**
     * @param array{
     *     MediaInsightsPipelineConfigurationName: string,
     *     ResourceAccessRoleArn: string,
     *     RealTimeAlertConfiguration?: Shapes\RealTimeAlertConfiguration|null,
     *     Elements: list<Shapes\MediaInsightsPipelineConfigurationElement>,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientRequestToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
