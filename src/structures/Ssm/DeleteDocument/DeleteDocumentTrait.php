<?php

namespace Sunaoka\Aws\Structures\Ssm\DeleteDocument;

trait DeleteDocumentTrait
{
    /**
     * @param DeleteDocumentRequest $args
     * @return DeleteDocumentResponse
     */
    public function deleteDocument(DeleteDocumentRequest $args)
    {
        $result = parent::deleteDocument($args->toArray());
        return new DeleteDocumentResponse($result->toArray());
    }
}
