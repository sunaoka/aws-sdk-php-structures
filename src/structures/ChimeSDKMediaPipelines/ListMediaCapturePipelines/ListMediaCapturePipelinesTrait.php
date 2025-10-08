<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\ListMediaCapturePipelines;

trait ListMediaCapturePipelinesTrait
{
    /**
     * @param ListMediaCapturePipelinesRequest $args
     * @return ListMediaCapturePipelinesResponse
     */
    public function listMediaCapturePipelines(ListMediaCapturePipelinesRequest $args)
    {
        $result = parent::listMediaCapturePipelines($args->toArray());
        return new ListMediaCapturePipelinesResponse($result->toArray());
    }
}
