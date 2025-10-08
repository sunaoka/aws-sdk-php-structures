<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteKnowledgeBaseDocuments;

trait DeleteKnowledgeBaseDocumentsTrait
{
    /**
     * @param DeleteKnowledgeBaseDocumentsRequest $args
     * @return DeleteKnowledgeBaseDocumentsResponse
     */
    public function deleteKnowledgeBaseDocuments(DeleteKnowledgeBaseDocumentsRequest $args)
    {
        $result = parent::deleteKnowledgeBaseDocuments($args->toArray());
        return new DeleteKnowledgeBaseDocumentsResponse($result->toArray());
    }
}
