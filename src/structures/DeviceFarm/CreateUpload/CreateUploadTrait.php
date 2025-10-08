<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\CreateUpload;

trait CreateUploadTrait
{
    /**
     * @param CreateUploadRequest $args
     * @return CreateUploadResponse
     */
    public function createUpload(CreateUploadRequest $args)
    {
        $result = parent::createUpload($args->toArray());
        return new CreateUploadResponse($result->toArray());
    }
}
