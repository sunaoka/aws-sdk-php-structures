<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentKnowledgeBases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $description
 * @property string $knowledgeBaseId
 * @property 'ENABLED'|'DISABLED' $knowledgeBaseState
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AgentKnowledgeBaseSummary extends Shape
{
    /**
     * @param array{
     *     description?: string,
     *     knowledgeBaseId: string,
     *     knowledgeBaseState: 'ENABLED'|'DISABLED',
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
