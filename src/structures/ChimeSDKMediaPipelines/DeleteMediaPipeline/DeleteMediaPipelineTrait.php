<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\DeleteMediaPipeline;

trait DeleteMediaPipelineTrait
{
    /**
     * @param DeleteMediaPipelineRequest $args
     * @return void
     */
    public function deleteMediaPipeline(DeleteMediaPipelineRequest $args)
    {
        parent::deleteMediaPipeline($args->toArray());
    }
}
