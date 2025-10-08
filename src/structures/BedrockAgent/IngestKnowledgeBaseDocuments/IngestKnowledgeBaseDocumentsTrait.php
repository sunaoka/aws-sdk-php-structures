<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments;

trait IngestKnowledgeBaseDocumentsTrait
{
    /**
     * @param IngestKnowledgeBaseDocumentsRequest $args
     * @return IngestKnowledgeBaseDocumentsResponse
     */
    public function ingestKnowledgeBaseDocuments(IngestKnowledgeBaseDocumentsRequest $args)
    {
        $result = parent::ingestKnowledgeBaseDocuments($args->toArray());
        return new IngestKnowledgeBaseDocumentsResponse($result->toArray());
    }
}
