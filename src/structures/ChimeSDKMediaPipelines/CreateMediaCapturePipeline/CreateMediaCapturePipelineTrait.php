<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaCapturePipeline;

trait CreateMediaCapturePipelineTrait
{
    /**
     * @param CreateMediaCapturePipelineRequest $args
     * @return CreateMediaCapturePipelineResponse
     */
    public function createMediaCapturePipeline(CreateMediaCapturePipelineRequest $args)
    {
        $result = parent::createMediaCapturePipeline($args->toArray());
        return new CreateMediaCapturePipelineResponse($result->toArray());
    }
}
