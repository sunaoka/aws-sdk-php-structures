<?php

namespace Sunaoka\Aws\Structures\imagebuilder\CreateImagePipeline;

trait CreateImagePipelineTrait
{
    /**
     * @param CreateImagePipelineRequest $args
     * @return CreateImagePipelineResponse
     */
    public function createImagePipeline(CreateImagePipelineRequest $args)
    {
        $result = parent::createImagePipeline($args->toArray());
        return new CreateImagePipelineResponse($result->toArray());
    }
}
