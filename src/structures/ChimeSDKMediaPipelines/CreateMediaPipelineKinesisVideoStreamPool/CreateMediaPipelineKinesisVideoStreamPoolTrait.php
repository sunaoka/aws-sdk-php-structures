<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaPipelineKinesisVideoStreamPool;

trait CreateMediaPipelineKinesisVideoStreamPoolTrait
{
    /**
     * @param CreateMediaPipelineKinesisVideoStreamPoolRequest $args
     * @return CreateMediaPipelineKinesisVideoStreamPoolResponse
     */
    public function createMediaPipelineKinesisVideoStreamPool(CreateMediaPipelineKinesisVideoStreamPoolRequest $args)
    {
        $result = parent::createMediaPipelineKinesisVideoStreamPool($args->toArray());
        return new CreateMediaPipelineKinesisVideoStreamPoolResponse($result->toArray());
    }
}
