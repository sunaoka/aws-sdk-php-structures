<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $ResourceAccessRoleArn
 * @property Shapes\RealTimeAlertConfiguration $RealTimeAlertConfiguration
 * @property list<Shapes\MediaInsightsPipelineConfigurationElement> $Elements
 */
class UpdateMediaInsightsPipelineConfigurationRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     ResourceAccessRoleArn: string,
     *     RealTimeAlertConfiguration?: Shapes\RealTimeAlertConfiguration,
     *     Elements: list<Shapes\MediaInsightsPipelineConfigurationElement>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
