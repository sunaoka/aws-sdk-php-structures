<?php

namespace Sunaoka\Aws\Structures\S3\CreateMultipartUpload;

trait CreateMultipartUploadTrait
{
    /**
     * @param CreateMultipartUploadRequest $args
     * @return CreateMultipartUploadResponse
     */
    public function createMultipartUpload(CreateMultipartUploadRequest $args)
    {
        $result = parent::createMultipartUpload($args->toArray());
        return new CreateMultipartUploadResponse($result->toArray());
    }
}
