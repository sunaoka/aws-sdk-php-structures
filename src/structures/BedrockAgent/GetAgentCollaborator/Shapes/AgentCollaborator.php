<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgentCollaborator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgentDescriptor $agentDescriptor
 * @property string $agentId
 * @property string $agentVersion
 * @property string|null $clientToken
 * @property string $collaborationInstruction
 * @property string $collaboratorId
 * @property string $collaboratorName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property 'TO_COLLABORATOR'|'DISABLED'|null $relayConversationHistory
 */
class AgentCollaborator extends Shape
{
    /**
     * @param array{
     *     agentDescriptor: AgentDescriptor,
     *     agentId: string,
     *     agentVersion: string,
     *     clientToken?: string|null,
     *     collaborationInstruction: string,
     *     collaboratorId: string,
     *     collaboratorName: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt: \Aws\Api\DateTimeResult,
     *     relayConversationHistory?: 'TO_COLLABORATOR'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
