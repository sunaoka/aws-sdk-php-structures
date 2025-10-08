<?php

namespace Sunaoka\Aws\Structures\imagebuilder\UpdateImagePipeline;

trait UpdateImagePipelineTrait
{
    /**
     * @param UpdateImagePipelineRequest $args
     * @return UpdateImagePipelineResponse
     */
    public function updateImagePipeline(UpdateImagePipelineRequest $args)
    {
        $result = parent::updateImagePipeline($args->toArray());
        return new UpdateImagePipelineResponse($result->toArray());
    }
}
