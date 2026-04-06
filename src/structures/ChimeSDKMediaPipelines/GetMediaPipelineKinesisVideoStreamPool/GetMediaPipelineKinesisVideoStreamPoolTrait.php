<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipelineKinesisVideoStreamPool;

trait GetMediaPipelineKinesisVideoStreamPoolTrait
{
    /**
     * @param GetMediaPipelineKinesisVideoStreamPoolRequest $args
     * @return GetMediaPipelineKinesisVideoStreamPoolResponse
     */
    public function getMediaPipelineKinesisVideoStreamPool(GetMediaPipelineKinesisVideoStreamPoolRequest $args)
    {
        $result = parent::getMediaPipelineKinesisVideoStreamPool($args->toArray());
        return new GetMediaPipelineKinesisVideoStreamPoolResponse($result->toArray());
    }
}
