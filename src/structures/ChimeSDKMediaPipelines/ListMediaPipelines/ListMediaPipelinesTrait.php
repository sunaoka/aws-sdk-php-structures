<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\ListMediaPipelines;

trait ListMediaPipelinesTrait
{
    /**
     * @param ListMediaPipelinesRequest $args
     * @return ListMediaPipelinesResponse
     */
    public function listMediaPipelines(ListMediaPipelinesRequest $args)
    {
        $result = parent::listMediaPipelines($args->toArray());
        return new ListMediaPipelinesResponse($result->toArray());
    }
}
