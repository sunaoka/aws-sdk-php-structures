<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property string|null $clientToken
 * @property list<Shapes\KnowledgeBaseDocument> $documents
 */
class IngestKnowledgeBaseDocumentsRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string,
     *     clientToken?: string|null,
     *     documents: list<Shapes\KnowledgeBaseDocument>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
