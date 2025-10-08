<?php

namespace Sunaoka\Aws\Structures\Ssm\CreateDocument;

trait CreateDocumentTrait
{
    /**
     * @param CreateDocumentRequest $args
     * @return CreateDocumentResponse
     */
    public function createDocument(CreateDocumentRequest $args)
    {
        $result = parent::createDocument($args->toArray());
        return new CreateDocumentResponse($result->toArray());
    }
}
