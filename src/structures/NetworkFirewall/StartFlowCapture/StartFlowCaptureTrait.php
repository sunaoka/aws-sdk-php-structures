<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\StartFlowCapture;

trait StartFlowCaptureTrait
{
    /**
     * @param StartFlowCaptureRequest $args
     * @return StartFlowCaptureResponse
     */
    public function startFlowCapture(StartFlowCaptureRequest $args)
    {
        $result = parent::startFlowCapture($args->toArray());
        return new StartFlowCaptureResponse($result->toArray());
    }
}
