<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaCapturePipeline;

trait GetMediaCapturePipelineTrait
{
    /**
     * @param GetMediaCapturePipelineRequest $args
     * @return GetMediaCapturePipelineResponse
     */
    public function getMediaCapturePipeline(GetMediaCapturePipelineRequest $args)
    {
        $result = parent::getMediaCapturePipeline($args->toArray());
        return new GetMediaCapturePipelineResponse($result->toArray());
    }
}
