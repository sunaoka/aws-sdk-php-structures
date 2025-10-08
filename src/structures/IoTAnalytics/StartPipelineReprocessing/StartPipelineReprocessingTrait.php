<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\StartPipelineReprocessing;

trait StartPipelineReprocessingTrait
{
    /**
     * @param StartPipelineReprocessingRequest $args
     * @return StartPipelineReprocessingResponse
     */
    public function startPipelineReprocessing(StartPipelineReprocessingRequest $args)
    {
        $result = parent::startPipelineReprocessing($args->toArray());
        return new StartPipelineReprocessingResponse($result->toArray());
    }
}
