<?php

namespace Sunaoka\Aws\Structures\S3\CompleteMultipartUpload;

trait CompleteMultipartUploadTrait
{
    /**
     * @param CompleteMultipartUploadRequest $args
     * @return CompleteMultipartUploadResponse
     */
    public function completeMultipartUpload(CompleteMultipartUploadRequest $args)
    {
        $result = parent::completeMultipartUpload($args->toArray());
        return new CompleteMultipartUploadResponse($result->toArray());
    }
}
