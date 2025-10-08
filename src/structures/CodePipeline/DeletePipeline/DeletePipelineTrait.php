<?php

namespace Sunaoka\Aws\Structures\CodePipeline\DeletePipeline;

trait DeletePipelineTrait
{
    /**
     * @param DeletePipelineRequest $args
     * @return void
     */
    public function deletePipeline(DeletePipelineRequest $args)
    {
        parent::deletePipeline($args->toArray());
    }
}
