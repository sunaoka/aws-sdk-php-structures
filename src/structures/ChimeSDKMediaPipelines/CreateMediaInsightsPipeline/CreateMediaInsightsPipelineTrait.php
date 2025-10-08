<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipeline;

trait CreateMediaInsightsPipelineTrait
{
    /**
     * @param CreateMediaInsightsPipelineRequest $args
     * @return CreateMediaInsightsPipelineResponse
     */
    public function createMediaInsightsPipeline(CreateMediaInsightsPipelineRequest $args)
    {
        $result = parent::createMediaInsightsPipeline($args->toArray());
        return new CreateMediaInsightsPipelineResponse($result->toArray());
    }
}
