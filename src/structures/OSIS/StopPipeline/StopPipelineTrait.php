<?php

namespace Sunaoka\Aws\Structures\OSIS\StopPipeline;

trait StopPipelineTrait
{
    /**
     * @param StopPipelineRequest $args
     * @return StopPipelineResponse
     */
    public function stopPipeline(StopPipelineRequest $args)
    {
        $result = parent::stopPipeline($args->toArray());
        return new StopPipelineResponse($result->toArray());
    }
}
