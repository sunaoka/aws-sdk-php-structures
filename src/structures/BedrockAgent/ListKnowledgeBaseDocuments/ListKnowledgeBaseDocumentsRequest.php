<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListKnowledgeBaseDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property string $knowledgeBaseId
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListKnowledgeBaseDocumentsRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     knowledgeBaseId: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
