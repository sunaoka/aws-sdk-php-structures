<?php

namespace Sunaoka\Aws\Structures\CloudSearchDomain\UploadDocuments;

trait UploadDocumentsTrait
{
    /**
     * @param UploadDocumentsRequest $args
     * @return UploadDocumentsResponse
     */
    public function uploadDocuments(UploadDocumentsRequest $args)
    {
        $result = parent::uploadDocuments($args->toArray());
        return new UploadDocumentsResponse($result->toArray());
    }
}
