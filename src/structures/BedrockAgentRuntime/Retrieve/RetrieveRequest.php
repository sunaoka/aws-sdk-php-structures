<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\GuardrailConfiguration|null $guardrailConfiguration
 * @property string $knowledgeBaseId
 * @property string|null $nextToken
 * @property Shapes\KnowledgeBaseRetrievalConfiguration|null $retrievalConfiguration
 * @property Shapes\KnowledgeBaseQuery $retrievalQuery
 * @property Shapes\UserContext|null $userContext
 */
class RetrieveRequest extends Request
{
    /**
     * @param array{
     *     guardrailConfiguration?: Shapes\GuardrailConfiguration|null,
     *     knowledgeBaseId: string,
     *     nextToken?: string|null,
     *     retrievalConfiguration?: Shapes\KnowledgeBaseRetrievalConfiguration|null,
     *     retrievalQuery: Shapes\KnowledgeBaseQuery,
     *     userContext?: Shapes\UserContext|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
