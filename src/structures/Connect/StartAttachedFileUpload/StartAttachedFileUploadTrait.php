<?php

namespace Sunaoka\Aws\Structures\Connect\StartAttachedFileUpload;

trait StartAttachedFileUploadTrait
{
    /**
     * @param StartAttachedFileUploadRequest $args
     * @return StartAttachedFileUploadResponse
     */
    public function startAttachedFileUpload(StartAttachedFileUploadRequest $args)
    {
        $result = parent::startAttachedFileUpload($args->toArray());
        return new StartAttachedFileUploadResponse($result->toArray());
    }
}
