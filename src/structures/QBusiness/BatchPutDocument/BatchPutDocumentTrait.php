<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument;

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
