<?php

namespace Sunaoka\Aws\Structures\Omics\AbortMultipartReadSetUpload;

trait AbortMultipartReadSetUploadTrait
{
    /**
     * @param AbortMultipartReadSetUploadRequest $args
     * @return AbortMultipartReadSetUploadResponse
     */
    public function abortMultipartReadSetUpload(AbortMultipartReadSetUploadRequest $args)
    {
        $result = parent::abortMultipartReadSetUpload($args->toArray());
        return new AbortMultipartReadSetUploadResponse($result->toArray());
    }
}
