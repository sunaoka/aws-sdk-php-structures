<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipelineConfiguration;

trait CreateMediaInsightsPipelineConfigurationTrait
{
    /**
     * @param CreateMediaInsightsPipelineConfigurationRequest $args
     * @return CreateMediaInsightsPipelineConfigurationResponse
     */
    public function createMediaInsightsPipelineConfiguration(CreateMediaInsightsPipelineConfigurationRequest $args)
    {
        $result = parent::createMediaInsightsPipelineConfiguration($args->toArray());
        return new CreateMediaInsightsPipelineConfigurationResponse($result->toArray());
    }
}
