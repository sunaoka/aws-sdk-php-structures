<?php

namespace Sunaoka\Aws\Structures\OSIS\StartPipeline;

trait StartPipelineTrait
{
    /**
     * @param StartPipelineRequest $args
     * @return StartPipelineResponse
     */
    public function startPipeline(StartPipelineRequest $args)
    {
        $result = parent::startPipeline($args->toArray());
        return new StartPipelineResponse($result->toArray());
    }
}
