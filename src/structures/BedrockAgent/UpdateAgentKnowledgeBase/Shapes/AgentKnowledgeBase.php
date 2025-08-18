<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgentKnowledgeBase\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $knowledgeBaseId
 * @property string $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ENABLED'|'DISABLED' $knowledgeBaseState
 */
class AgentKnowledgeBase extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     knowledgeBaseId: string,
     *     description: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     knowledgeBaseState: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
