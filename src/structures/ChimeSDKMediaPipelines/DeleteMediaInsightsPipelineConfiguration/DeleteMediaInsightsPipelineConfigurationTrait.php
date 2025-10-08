<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\DeleteMediaInsightsPipelineConfiguration;

trait DeleteMediaInsightsPipelineConfigurationTrait
{
    /**
     * @param DeleteMediaInsightsPipelineConfigurationRequest $args
     * @return void
     */
    public function deleteMediaInsightsPipelineConfiguration(DeleteMediaInsightsPipelineConfigurationRequest $args)
    {
        parent::deleteMediaInsightsPipelineConfiguration($args->toArray());
    }
}
