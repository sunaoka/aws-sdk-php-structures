<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetCaptureData;

trait GetCaptureDataTrait
{
    /**
     * @param GetCaptureDataRequest $args
     * @return GetCaptureDataResponse
     */
    public function getCaptureData(GetCaptureDataRequest $args)
    {
        $result = parent::getCaptureData($args->toArray());
        return new GetCaptureDataResponse($result->toArray());
    }
}
