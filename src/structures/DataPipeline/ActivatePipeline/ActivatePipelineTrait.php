<?php

namespace Sunaoka\Aws\Structures\DataPipeline\ActivatePipeline;

trait ActivatePipelineTrait
{
    /**
     * @param ActivatePipelineRequest $args
     * @return ActivatePipelineResponse
     */
    public function activatePipeline(ActivatePipelineRequest $args)
    {
        $result = parent::activatePipeline($args->toArray());
        return new ActivatePipelineResponse($result->toArray());
    }
}
