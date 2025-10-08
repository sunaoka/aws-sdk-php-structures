<?php

namespace Sunaoka\Aws\Structures\WorkDocs\AbortDocumentVersionUpload;

trait AbortDocumentVersionUploadTrait
{
    /**
     * @param AbortDocumentVersionUploadRequest $args
     * @return void
     */
    public function abortDocumentVersionUpload(AbortDocumentVersionUploadRequest $args)
    {
        parent::abortDocumentVersionUpload($args->toArray());
    }
}
