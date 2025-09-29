<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property Shapes\KnowledgeBaseQuery $retrievalQuery
 * @property Shapes\KnowledgeBaseRetrievalConfiguration|null $retrievalConfiguration
 * @property Shapes\GuardrailConfiguration|null $guardrailConfiguration
 * @property string|null $nextToken
 */
class RetrieveRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     retrievalQuery: Shapes\KnowledgeBaseQuery,
     *     retrievalConfiguration?: Shapes\KnowledgeBaseRetrievalConfiguration|null,
     *     guardrailConfiguration?: Shapes\GuardrailConfiguration|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
