<?php

namespace Sunaoka\Aws\Structures\StorageGateway\EvictFilesFailingUpload;

trait EvictFilesFailingUploadTrait
{
    /**
     * @param EvictFilesFailingUploadRequest $args
     * @return EvictFilesFailingUploadResponse
     */
    public function evictFilesFailingUpload(EvictFilesFailingUploadRequest $args)
    {
        $result = parent::evictFilesFailingUpload($args->toArray());
        return new EvictFilesFailingUploadResponse($result->toArray());
    }
}
