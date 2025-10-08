<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\ListMediaPipelineKinesisVideoStreamPools;

trait ListMediaPipelineKinesisVideoStreamPoolsTrait
{
    /**
     * @param ListMediaPipelineKinesisVideoStreamPoolsRequest $args
     * @return ListMediaPipelineKinesisVideoStreamPoolsResponse
     */
    public function listMediaPipelineKinesisVideoStreamPools(ListMediaPipelineKinesisVideoStreamPoolsRequest $args)
    {
        $result = parent::listMediaPipelineKinesisVideoStreamPools($args->toArray());
        return new ListMediaPipelineKinesisVideoStreamPoolsResponse($result->toArray());
    }
}
