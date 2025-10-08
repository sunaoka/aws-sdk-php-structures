<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\ListMediaInsightsPipelineConfigurations;

trait ListMediaInsightsPipelineConfigurationsTrait
{
    /**
     * @param ListMediaInsightsPipelineConfigurationsRequest $args
     * @return ListMediaInsightsPipelineConfigurationsResponse
     */
    public function listMediaInsightsPipelineConfigurations(ListMediaInsightsPipelineConfigurationsRequest $args)
    {
        $result = parent::listMediaInsightsPipelineConfigurations($args->toArray());
        return new ListMediaInsightsPipelineConfigurationsResponse($result->toArray());
    }
}
