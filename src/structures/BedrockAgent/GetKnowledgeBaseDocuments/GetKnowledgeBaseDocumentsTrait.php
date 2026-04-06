<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBaseDocuments;

trait GetKnowledgeBaseDocumentsTrait
{
    /**
     * @param GetKnowledgeBaseDocumentsRequest $args
     * @return GetKnowledgeBaseDocumentsResponse
     */
    public function getKnowledgeBaseDocuments(GetKnowledgeBaseDocumentsRequest $args)
    {
        $result = parent::getKnowledgeBaseDocuments($args->toArray());
        return new GetKnowledgeBaseDocumentsResponse($result->toArray());
    }
}
