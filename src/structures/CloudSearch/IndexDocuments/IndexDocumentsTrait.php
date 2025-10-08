<?php

namespace Sunaoka\Aws\Structures\CloudSearch\IndexDocuments;

trait IndexDocumentsTrait
{
    /**
     * @param IndexDocumentsRequest $args
     * @return IndexDocumentsResponse
     */
    public function indexDocuments(IndexDocumentsRequest $args)
    {
        $result = parent::indexDocuments($args->toArray());
        return new IndexDocumentsResponse($result->toArray());
    }
}
