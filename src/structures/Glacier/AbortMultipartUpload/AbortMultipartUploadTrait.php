<?php

namespace Sunaoka\Aws\Structures\Glacier\AbortMultipartUpload;

trait AbortMultipartUploadTrait
{
    /**
     * @param AbortMultipartUploadRequest $args
     * @return void
     */
    public function abortMultipartUpload(AbortMultipartUploadRequest $args)
    {
        parent::abortMultipartUpload($args->toArray());
    }
}
