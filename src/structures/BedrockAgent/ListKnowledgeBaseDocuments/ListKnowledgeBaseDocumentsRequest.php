<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListKnowledgeBaseDocuments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property string $knowledgeBaseId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListKnowledgeBaseDocumentsRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     knowledgeBaseId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
