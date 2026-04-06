<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaStreamPipeline;

trait CreateMediaStreamPipelineTrait
{
    /**
     * @param CreateMediaStreamPipelineRequest $args
     * @return CreateMediaStreamPipelineResponse
     */
    public function createMediaStreamPipeline(CreateMediaStreamPipelineRequest $args)
    {
        $result = parent::createMediaStreamPipeline($args->toArray());
        return new CreateMediaStreamPipelineResponse($result->toArray());
    }
}
