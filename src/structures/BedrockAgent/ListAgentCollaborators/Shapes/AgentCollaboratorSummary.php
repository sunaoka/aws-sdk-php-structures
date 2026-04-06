<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentCollaborators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentDescriptor $agentDescriptor
 * @property string $agentId
 * @property string $agentVersion
 * @property string $collaborationInstruction
 * @property string $collaboratorId
 * @property string $collaboratorName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'TO_COLLABORATOR'|'DISABLED' $relayConversationHistory
 */
class AgentCollaboratorSummary extends Shape
{
    /**
     * @param array{
     *     agentDescriptor: AgentDescriptor,
     *     agentId: string,
     *     agentVersion: string,
     *     collaborationInstruction: string,
     *     collaboratorId: string,
     *     collaboratorName: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     relayConversationHistory: 'TO_COLLABORATOR'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
