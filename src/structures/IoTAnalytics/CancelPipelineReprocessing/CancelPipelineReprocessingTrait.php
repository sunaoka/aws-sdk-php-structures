<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CancelPipelineReprocessing;

trait CancelPipelineReprocessingTrait
{
    /**
     * @param CancelPipelineReprocessingRequest $args
     * @return CancelPipelineReprocessingResponse
     */
    public function cancelPipelineReprocessing(CancelPipelineReprocessingRequest $args)
    {
        $result = parent::cancelPipelineReprocessing($args->toArray());
        return new CancelPipelineReprocessingResponse($result->toArray());
    }
}
