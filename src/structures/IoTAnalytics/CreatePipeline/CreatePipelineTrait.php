<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreatePipeline;

trait CreatePipelineTrait
{
    /**
     * @param CreatePipelineRequest $args
     * @return CreatePipelineResponse
     */
    public function createPipeline(CreatePipelineRequest $args)
    {
        $result = parent::createPipeline($args->toArray());
        return new CreatePipelineResponse($result->toArray());
    }
}
