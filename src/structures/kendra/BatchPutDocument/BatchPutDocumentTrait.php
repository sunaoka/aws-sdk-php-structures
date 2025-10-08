<?php

namespace Sunaoka\Aws\Structures\kendra\BatchPutDocument;

trait BatchPutDocumentTrait
{
    /**
     * @param BatchPutDocumentRequest $args
     * @return BatchPutDocumentResponse
     */
    public function batchPutDocument(BatchPutDocumentRequest $args)
    {
        $result = parent::batchPutDocument($args->toArray());
        return new BatchPutDocumentResponse($result->toArray());
    }
}
