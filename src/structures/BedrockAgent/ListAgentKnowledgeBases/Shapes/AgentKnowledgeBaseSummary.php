<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $knowledgeBaseId
 * @property string|null $description
 * @property 'ENABLED'|'DISABLED' $knowledgeBaseState
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AgentKnowledgeBaseSummary extends Shape
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     description?: string|null,
     *     knowledgeBaseState: 'ENABLED'|'DISABLED',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
