<?php

namespace Sunaoka\Aws\Structures\WorkDocs\InitiateDocumentVersionUpload;

trait InitiateDocumentVersionUploadTrait
{
    /**
     * @param InitiateDocumentVersionUploadRequest $args
     * @return InitiateDocumentVersionUploadResponse
     */
    public function initiateDocumentVersionUpload(InitiateDocumentVersionUploadRequest $args)
    {
        $result = parent::initiateDocumentVersionUpload($args->toArray());
        return new InitiateDocumentVersionUploadResponse($result->toArray());
    }
}
