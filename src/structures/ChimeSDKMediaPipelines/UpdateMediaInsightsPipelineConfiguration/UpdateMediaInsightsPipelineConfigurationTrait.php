<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration;

trait UpdateMediaInsightsPipelineConfigurationTrait
{
    /**
     * @param UpdateMediaInsightsPipelineConfigurationRequest $args
     * @return UpdateMediaInsightsPipelineConfigurationResponse
     */
    public function updateMediaInsightsPipelineConfiguration(UpdateMediaInsightsPipelineConfigurationRequest $args)
    {
        $result = parent::updateMediaInsightsPipelineConfiguration($args->toArray());
        return new UpdateMediaInsightsPipelineConfigurationResponse($result->toArray());
    }
}
