<?php

namespace Sunaoka\Aws\Structures\Omics\CreateMultipartReadSetUpload;

trait CreateMultipartReadSetUploadTrait
{
    /**
     * @param CreateMultipartReadSetUploadRequest $args
     * @return CreateMultipartReadSetUploadResponse
     */
    public function createMultipartReadSetUpload(CreateMultipartReadSetUploadRequest $args)
    {
        $result = parent::createMultipartReadSetUpload($args->toArray());
        return new CreateMultipartReadSetUploadResponse($result->toArray());
    }
}
