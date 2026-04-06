<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\DeleteKnowledgeBaseDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property string $dataSourceId
 * @property string|null $clientToken
 * @property list<Shapes\DocumentIdentifier> $documentIdentifiers
 */
class DeleteKnowledgeBaseDocumentsRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     dataSourceId: string,
     *     clientToken?: string|null,
     *     documentIdentifiers: list<Shapes\DocumentIdentifier>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
