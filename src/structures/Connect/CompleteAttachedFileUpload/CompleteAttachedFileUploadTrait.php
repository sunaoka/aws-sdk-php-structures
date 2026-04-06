<?php

namespace Sunaoka\Aws\Structures\Connect\CompleteAttachedFileUpload;

trait CompleteAttachedFileUploadTrait
{
    /**
     * @param CompleteAttachedFileUploadRequest $args
     * @return CompleteAttachedFileUploadResponse
     */
    public function completeAttachedFileUpload(CompleteAttachedFileUploadRequest $args)
    {
        $result = parent::completeAttachedFileUpload($args->toArray());
        return new CompleteAttachedFileUploadResponse($result->toArray());
    }
}
