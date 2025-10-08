<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaConcatenationPipeline;

trait CreateMediaConcatenationPipelineTrait
{
    /**
     * @param CreateMediaConcatenationPipelineRequest $args
     * @return CreateMediaConcatenationPipelineResponse
     */
    public function createMediaConcatenationPipeline(CreateMediaConcatenationPipelineRequest $args)
    {
        $result = parent::createMediaConcatenationPipeline($args->toArray());
        return new CreateMediaConcatenationPipelineResponse($result->toArray());
    }
}
