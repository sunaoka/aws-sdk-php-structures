<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBaseDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property list<Shapes\DocumentIdentifier> $documentIdentifiers
 * @property string $knowledgeBaseId
 */
class GetKnowledgeBaseDocumentsRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     documentIdentifiers: list<Shapes\DocumentIdentifier>,
     *     knowledgeBaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
