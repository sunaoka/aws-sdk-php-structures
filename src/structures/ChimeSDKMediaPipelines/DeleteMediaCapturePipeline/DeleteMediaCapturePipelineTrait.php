<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\DeleteMediaCapturePipeline;

trait DeleteMediaCapturePipelineTrait
{
    /**
     * @param DeleteMediaCapturePipelineRequest $args
     * @return void
     */
    public function deleteMediaCapturePipeline(DeleteMediaCapturePipelineRequest $args)
    {
        parent::deleteMediaCapturePipeline($args->toArray());
    }
}
