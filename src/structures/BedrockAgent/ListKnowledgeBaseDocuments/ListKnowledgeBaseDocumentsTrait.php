<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListKnowledgeBaseDocuments;

trait ListKnowledgeBaseDocumentsTrait
{
    /**
     * @param ListKnowledgeBaseDocumentsRequest $args
     * @return ListKnowledgeBaseDocumentsResponse
     */
    public function listKnowledgeBaseDocuments(ListKnowledgeBaseDocumentsRequest $args)
    {
        $result = parent::listKnowledgeBaseDocuments($args->toArray());
        return new ListKnowledgeBaseDocumentsResponse($result->toArray());
    }
}
