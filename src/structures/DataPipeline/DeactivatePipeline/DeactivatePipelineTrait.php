<?php

namespace Sunaoka\Aws\Structures\DataPipeline\DeactivatePipeline;

trait DeactivatePipelineTrait
{
    /**
     * @param DeactivatePipelineRequest $args
     * @return DeactivatePipelineResponse
     */
    public function deactivatePipeline(DeactivatePipelineRequest $args)
    {
        $result = parent::deactivatePipeline($args->toArray());
        return new DeactivatePipelineResponse($result->toArray());
    }
}
