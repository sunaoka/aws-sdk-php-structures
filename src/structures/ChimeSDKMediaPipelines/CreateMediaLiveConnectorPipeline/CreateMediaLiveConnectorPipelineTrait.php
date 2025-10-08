<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaLiveConnectorPipeline;

trait CreateMediaLiveConnectorPipelineTrait
{
    /**
     * @param CreateMediaLiveConnectorPipelineRequest $args
     * @return CreateMediaLiveConnectorPipelineResponse
     */
    public function createMediaLiveConnectorPipeline(CreateMediaLiveConnectorPipelineRequest $args)
    {
        $result = parent::createMediaLiveConnectorPipeline($args->toArray());
        return new CreateMediaLiveConnectorPipelineResponse($result->toArray());
    }
}
