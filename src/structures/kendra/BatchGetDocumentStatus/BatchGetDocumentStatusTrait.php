<?php

namespace Sunaoka\Aws\Structures\kendra\BatchGetDocumentStatus;

trait BatchGetDocumentStatusTrait
{
    /**
     * @param BatchGetDocumentStatusRequest $args
     * @return BatchGetDocumentStatusResponse
     */
    public function batchGetDocumentStatus(BatchGetDocumentStatusRequest $args)
    {
        $result = parent::batchGetDocumentStatus($args->toArray());
        return new BatchGetDocumentStatusResponse($result->toArray());
    }
}
