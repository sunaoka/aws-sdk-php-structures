<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchDeleteDocument;

trait BatchDeleteDocumentTrait
{
    /**
     * @param BatchDeleteDocumentRequest $args
     * @return BatchDeleteDocumentResponse
     */
    public function batchDeleteDocument(BatchDeleteDocumentRequest $args)
    {
        $result = parent::batchDeleteDocument($args->toArray());
        return new BatchDeleteDocumentResponse($result->toArray());
    }
}
