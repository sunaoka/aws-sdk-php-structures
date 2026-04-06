<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $description
 * @property string $knowledgeBaseId
 * @property 'ENABLED'|'DISABLED' $knowledgeBaseState
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class AgentKnowledgeBase extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description: string,
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
