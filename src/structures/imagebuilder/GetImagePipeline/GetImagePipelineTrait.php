<?php

namespace Sunaoka\Aws\Structures\imagebuilder\GetImagePipeline;

trait GetImagePipelineTrait
{
    /**
     * @param GetImagePipelineRequest $args
     * @return GetImagePipelineResponse
     */
    public function getImagePipeline(GetImagePipelineRequest $args)
    {
        $result = parent::getImagePipeline($args->toArray());
        return new GetImagePipelineResponse($result->toArray());
    }
}
