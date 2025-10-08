<?php

namespace Sunaoka\Aws\Structures\Glacier\InitiateMultipartUpload;

trait InitiateMultipartUploadTrait
{
    /**
     * @param InitiateMultipartUploadRequest $args
     * @return InitiateMultipartUploadResponse
     */
    public function initiateMultipartUpload(InitiateMultipartUploadRequest $args)
    {
        $result = parent::initiateMultipartUpload($args->toArray());
        return new InitiateMultipartUploadResponse($result->toArray());
    }
}
