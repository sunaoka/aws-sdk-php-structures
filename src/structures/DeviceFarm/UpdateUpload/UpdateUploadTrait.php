<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\UpdateUpload;

trait UpdateUploadTrait
{
    /**
     * @param UpdateUploadRequest $args
     * @return UpdateUploadResponse
     */
    public function updateUpload(UpdateUploadRequest $args)
    {
        $result = parent::updateUpload($args->toArray());
        return new UpdateUploadResponse($result->toArray());
    }
}
