<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\DeleteMediaPipelineKinesisVideoStreamPool;

trait DeleteMediaPipelineKinesisVideoStreamPoolTrait
{
    /**
     * @param DeleteMediaPipelineKinesisVideoStreamPoolRequest $args
     * @return void
     */
    public function deleteMediaPipelineKinesisVideoStreamPool(DeleteMediaPipelineKinesisVideoStreamPoolRequest $args)
    {
        parent::deleteMediaPipelineKinesisVideoStreamPool($args->toArray());
    }
}
