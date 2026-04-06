<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetKnowledgeBaseDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property list<Shapes\DocumentIdentifier> $documentIdentifiers
 */
class GetKnowledgeBaseDocumentsRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string,
     *     documentIdentifiers: list<Shapes\DocumentIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
