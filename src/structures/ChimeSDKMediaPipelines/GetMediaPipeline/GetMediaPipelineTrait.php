<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline;

trait GetMediaPipelineTrait
{
    /**
     * @param GetMediaPipelineRequest $args
     * @return GetMediaPipelineResponse
     */
    public function getMediaPipeline(GetMediaPipelineRequest $args)
    {
        $result = parent::getMediaPipeline($args->toArray());
        return new GetMediaPipelineResponse($result->toArray());
    }
}
