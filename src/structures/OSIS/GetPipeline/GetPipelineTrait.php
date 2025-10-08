<?php

namespace Sunaoka\Aws\Structures\OSIS\GetPipeline;

trait GetPipelineTrait
{
    /**
     * @param GetPipelineRequest $args
     * @return GetPipelineResponse
     */
    public function getPipeline(GetPipelineRequest $args)
    {
        $result = parent::getPipeline($args->toArray());
        return new GetPipelineResponse($result->toArray());
    }
}
