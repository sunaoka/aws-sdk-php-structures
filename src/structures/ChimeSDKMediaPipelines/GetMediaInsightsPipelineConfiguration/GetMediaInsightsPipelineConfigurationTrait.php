<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaInsightsPipelineConfiguration;

trait GetMediaInsightsPipelineConfigurationTrait
{
    /**
     * @param GetMediaInsightsPipelineConfigurationRequest $args
     * @return GetMediaInsightsPipelineConfigurationResponse
     */
    public function getMediaInsightsPipelineConfiguration(GetMediaInsightsPipelineConfigurationRequest $args)
    {
        $result = parent::getMediaInsightsPipelineConfiguration($args->toArray());
        return new GetMediaInsightsPipelineConfigurationResponse($result->toArray());
    }
}
