<?php

namespace Sunaoka\Aws\Structures\S3\AbortMultipartUpload;

trait AbortMultipartUploadTrait
{
    /**
     * @param AbortMultipartUploadRequest $args
     * @return AbortMultipartUploadResponse
     */
    public function abortMultipartUpload(AbortMultipartUploadRequest $args)
    {
        $result = parent::abortMultipartUpload($args->toArray());
        return new AbortMultipartUploadResponse($result->toArray());
    }
}
