<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetPositionEstimate;

trait GetPositionEstimateTrait
{
    /**
     * @param GetPositionEstimateRequest $args
     * @return GetPositionEstimateResponse
     */
    public function getPositionEstimate(GetPositionEstimateRequest $args)
    {
        $result = parent::getPositionEstimate($args->toArray());
        return new GetPositionEstimateResponse($result->toArray());
    }
}
