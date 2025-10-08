<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdatePipeline;

trait UpdatePipelineTrait
{
    /**
     * @param UpdatePipelineRequest $args
     * @return UpdatePipelineResponse
     */
    public function updatePipeline(UpdatePipelineRequest $args)
    {
        $result = parent::updatePipeline($args->toArray());
        return new UpdatePipelineResponse($result->toArray());
    }
}
