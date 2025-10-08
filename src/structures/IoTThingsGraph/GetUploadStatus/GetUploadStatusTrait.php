<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\GetUploadStatus;

trait GetUploadStatusTrait
{
    /**
     * @param GetUploadStatusRequest $args
     * @return GetUploadStatusResponse
     */
    public function getUploadStatus(GetUploadStatusRequest $args)
    {
        $result = parent::getUploadStatus($args->toArray());
        return new GetUploadStatusResponse($result->toArray());
    }
}
