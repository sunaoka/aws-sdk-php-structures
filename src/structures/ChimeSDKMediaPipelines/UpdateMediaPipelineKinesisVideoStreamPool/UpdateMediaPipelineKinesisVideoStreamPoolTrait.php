<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaPipelineKinesisVideoStreamPool;

trait UpdateMediaPipelineKinesisVideoStreamPoolTrait
{
    /**
     * @param UpdateMediaPipelineKinesisVideoStreamPoolRequest $args
     * @return UpdateMediaPipelineKinesisVideoStreamPoolResponse
     */
    public function updateMediaPipelineKinesisVideoStreamPool(UpdateMediaPipelineKinesisVideoStreamPoolRequest $args)
    {
        $result = parent::updateMediaPipelineKinesisVideoStreamPool($args->toArray());
        return new UpdateMediaPipelineKinesisVideoStreamPoolResponse($result->toArray());
    }
}
