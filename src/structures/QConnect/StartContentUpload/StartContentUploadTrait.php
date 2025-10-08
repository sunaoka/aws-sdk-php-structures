<?php

namespace Sunaoka\Aws\Structures\QConnect\StartContentUpload;

trait StartContentUploadTrait
{
    /**
     * @param StartContentUploadRequest $args
     * @return StartContentUploadResponse
     */
    public function startContentUpload(StartContentUploadRequest $args)
    {
        $result = parent::startContentUpload($args->toArray());
        return new StartContentUploadResponse($result->toArray());
    }
}
