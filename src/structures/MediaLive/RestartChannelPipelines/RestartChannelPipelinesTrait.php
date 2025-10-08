<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines;

trait RestartChannelPipelinesTrait
{
    /**
     * @param RestartChannelPipelinesRequest $args
     * @return RestartChannelPipelinesResponse
     */
    public function restartChannelPipelines(RestartChannelPipelinesRequest $args)
    {
        $result = parent::restartChannelPipelines($args->toArray());
        return new RestartChannelPipelinesResponse($result->toArray());
    }
}
