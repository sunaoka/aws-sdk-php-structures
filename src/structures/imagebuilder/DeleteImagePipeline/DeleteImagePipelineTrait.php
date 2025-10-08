<?php

namespace Sunaoka\Aws\Structures\imagebuilder\DeleteImagePipeline;

trait DeleteImagePipelineTrait
{
    /**
     * @param DeleteImagePipelineRequest $args
     * @return DeleteImagePipelineResponse
     */
    public function deleteImagePipeline(DeleteImagePipelineRequest $args)
    {
        $result = parent::deleteImagePipeline($args->toArray());
        return new DeleteImagePipelineResponse($result->toArray());
    }
}
