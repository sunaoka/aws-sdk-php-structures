<?php

namespace Sunaoka\Aws\Structures\Proton\UpdateServicePipeline;

trait UpdateServicePipelineTrait
{
    /**
     * @param UpdateServicePipelineRequest $args
     * @return UpdateServicePipelineResponse
     */
    public function updateServicePipeline(UpdateServicePipelineRequest $args)
    {
        $result = parent::updateServicePipeline($args->toArray());
        return new UpdateServicePipelineResponse($result->toArray());
    }
}
