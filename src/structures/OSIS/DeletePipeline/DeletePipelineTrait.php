<?php

namespace Sunaoka\Aws\Structures\OSIS\DeletePipeline;

trait DeletePipelineTrait
{
    /**
     * @param DeletePipelineRequest $args
     * @return DeletePipelineResponse
     */
    public function deletePipeline(DeletePipelineRequest $args)
    {
        $result = parent::deletePipeline($args->toArray());
        return new DeletePipelineResponse($result->toArray());
    }
}
