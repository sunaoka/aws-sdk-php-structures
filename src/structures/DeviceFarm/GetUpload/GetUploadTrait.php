<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetUpload;

trait GetUploadTrait
{
    /**
     * @param GetUploadRequest $args
     * @return GetUploadResponse
     */
    public function getUpload(GetUploadRequest $args)
    {
        $result = parent::getUpload($args->toArray());
        return new GetUploadResponse($result->toArray());
    }
}
