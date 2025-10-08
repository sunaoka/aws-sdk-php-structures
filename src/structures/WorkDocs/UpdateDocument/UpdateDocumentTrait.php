<?php

namespace Sunaoka\Aws\Structures\WorkDocs\UpdateDocument;

trait UpdateDocumentTrait
{
    /**
     * @param UpdateDocumentRequest $args
     * @return void
     */
    public function updateDocument(UpdateDocumentRequest $args)
    {
        parent::updateDocument($args->toArray());
    }
}
