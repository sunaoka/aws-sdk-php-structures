<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\CreatePipeline;

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
