<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\DeleteUpload;

trait DeleteUploadTrait
{
    /**
     * @param DeleteUploadRequest $args
     * @return DeleteUploadResponse
     */
    public function deleteUpload(DeleteUploadRequest $args)
    {
        $result = parent::deleteUpload($args->toArray());
        return new DeleteUploadResponse($result->toArray());
    }
}
