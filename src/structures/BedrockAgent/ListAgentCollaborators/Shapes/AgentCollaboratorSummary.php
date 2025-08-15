<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\ListAgentCollaborators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $agentId
 * @property string $agentVersion
 * @property string $collaboratorId
 * @property AgentDescriptor $agentDescriptor
 * @property string $collaborationInstruction
 * @property 'TO_COLLABORATOR'|'DISABLED' $relayConversationHistory
 * @property string $collaboratorName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 */
class AgentCollaboratorSummary extends Shape
{
    /**
     * @param array{
     *     agentId: string,
     *     agentVersion: string,
     *     collaboratorId: string,
     *     agentDescriptor: AgentDescriptor,
     *     collaborationInstruction: string,
     *     relayConversationHistory: 'TO_COLLABORATOR'|'DISABLED',
     *     collaboratorName: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
