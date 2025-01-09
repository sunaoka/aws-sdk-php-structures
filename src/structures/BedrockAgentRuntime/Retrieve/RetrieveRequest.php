<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\GuardrailConfiguration $guardrailConfiguration
 * @property string $knowledgeBaseId
 * @property string $nextToken
 * @property Shapes\KnowledgeBaseRetrievalConfiguration $retrievalConfiguration
 * @property Shapes\KnowledgeBaseQuery $retrievalQuery
 */
class RetrieveRequest extends Request
{
    /**
     * @param array{
     *     guardrailConfiguration?: Shapes\GuardrailConfiguration,
     *     knowledgeBaseId: string,
     *     nextToken?: string,
     *     retrievalConfiguration?: Shapes\KnowledgeBaseRetrievalConfiguration,
     *     retrievalQuery: Shapes\KnowledgeBaseQuery
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
