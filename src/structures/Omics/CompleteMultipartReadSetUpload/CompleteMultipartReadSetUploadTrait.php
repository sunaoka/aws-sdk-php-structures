<?php

namespace Sunaoka\Aws\Structures\Omics\CompleteMultipartReadSetUpload;

trait CompleteMultipartReadSetUploadTrait
{
    /**
     * @param CompleteMultipartReadSetUploadRequest $args
     * @return CompleteMultipartReadSetUploadResponse
     */
    public function completeMultipartReadSetUpload(CompleteMultipartReadSetUploadRequest $args)
    {
        $result = parent::completeMultipartReadSetUpload($args->toArray());
        return new CompleteMultipartReadSetUploadResponse($result->toArray());
    }
}
