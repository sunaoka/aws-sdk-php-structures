<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetDocument;

trait GetDocumentTrait
{
    /**
     * @param GetDocumentRequest $args
     * @return GetDocumentResponse
     */
    public function getDocument(GetDocumentRequest $args)
    {
        $result = parent::getDocument($args->toArray());
        return new GetDocumentResponse($result->toArray());
    }
}
