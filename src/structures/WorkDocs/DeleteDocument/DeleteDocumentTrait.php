<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DeleteDocument;

trait DeleteDocumentTrait
{
    /**
     * @param DeleteDocumentRequest $args
     * @return void
     */
    public function deleteDocument(DeleteDocumentRequest $args)
    {
        parent::deleteDocument($args->toArray());
    }
}
