<?php

namespace Sunaoka\Aws\Structures\OSIS\UpdatePipeline;

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
