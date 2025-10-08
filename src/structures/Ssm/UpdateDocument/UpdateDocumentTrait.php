<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateDocument;

trait UpdateDocumentTrait
{
    /**
     * @param UpdateDocumentRequest $args
     * @return UpdateDocumentResponse
     */
    public function updateDocument(UpdateDocumentRequest $args)
    {
        $result = parent::updateDocument($args->toArray());
        return new UpdateDocumentResponse($result->toArray());
    }
}
